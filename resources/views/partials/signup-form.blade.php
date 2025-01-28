<div class="global_signup_section">
    <div class="body_container">
        <div class="signup-container">
            <h2 class="text-center mb-4">{{ $signUpData['signup']['title'] }}</h2>
            <form method="POST" action="{{ route('signup.submit') }}" id="signupForm">
                @csrf

                <!-- Email Input with Send OTP Button -->
                <div class="mb-3 d-flex align-items-center">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control me-2"
                        placeholder="{{ $signUpData['signup']['emailPlaceholder'] }}"
                        required
                    />
                    <button
                        type="button"
                        id="sendEmailOtpBtn"
                        class="btn btn-primary btn-sm px-3 otp-btn"
                    >
                        Send OTP
                    </button>
                </div>

                <!-- Phone Number Input -->
                <div class="mb-3">
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="form-control"
                        placeholder="Enter Phone Number"
                        required
                    />
                </div>

                <!-- OTP Input -->
                <div class="mb-3">
                    <input
                        type="text"
                        name="otp"
                        id="otp"
                        class="form-control"
                        placeholder="Enter OTP"
                        required
                    />
                </div>

                <!-- Password Fields -->
                <div class="mb-3 password-wrapper">
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="create-password"
                        placeholder="{{ $signUpData['signup']['passwordPlaceholder'] }}"
                        required
                    />
                    <i
                        class="bi bi-eye-slash toggle-password"
                        data-target="create-password"
                    ></i>
                </div>
                <div class="mb-3 password-wrapper">
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        id="confirm-password"
                        placeholder="{{ $signUpData['signup']['confirmPasswordPlaceholder'] }}"
                        required
                    />
                    <i
                        class="bi bi-eye-slash toggle-password"
                        data-target="confirm-password"
                    ></i>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning w-100 mb-2">
                    {{ $signUpData['signup']['signupButton'] }}
                </button>

                <!-- Login Link -->
                <p class="text-center">
                    {{ $signUpData['signup']['loginText'] }}
                    <a href="{{ route('login') }}">{{ $signUpData['signup']['loginLink'] }}</a>
                </p>
            </form>
        </div>
    </div>
</div>

<script>
    // Toggle password visibility
    document.querySelectorAll(".toggle-password").forEach((eyeIcon) => {
        eyeIcon.addEventListener("click", function () {
            const targetInput = document.getElementById(
                this.getAttribute("data-target")
            );
            if (targetInput.type === "password") {
                targetInput.type = "text";
                this.classList.remove("bi-eye-slash");
                this.classList.add("bi-eye");
            } else {
                targetInput.type = "password";
                this.classList.remove("bi-eye");
                this.classList.add("bi-eye-slash");
            }
        });
    });

    // Send OTP functionality for email
    const sendEmailOtpBtn = document.getElementById('sendEmailOtpBtn');
    const emailInput = document.getElementById('email');

    sendEmailOtpBtn.addEventListener('click', function () {
        const email = emailInput.value.trim();

        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Send OTP request via AJAX
        fetch('{{ route('send.email.otp') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ email }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    alert(data.message); // Notify the user
                } else {
                    alert('Failed to send OTP. Please try again.');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred while sending the OTP.');
            });
    });

    // Email validation function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Form validation before submission
    const signupForm = document.getElementById('signupForm');
    signupForm.addEventListener('submit', function (event) {
        const phoneInput = document.getElementById('phone');
        const phone = phoneInput.value.trim();

        if (!validatePhone(phone)) {
            alert('Please enter a valid phone number.');
            event.preventDefault(); // Prevent form submission
        }
    });

    // Phone number validation function
    function validatePhone(phone) {
        const re = /^[0-9]{10}$/; // Adjust for your region
        return re.test(phone);
    }
</script>
