<div class="global_login">
<div class="body_login">
<div class="row align-items-center">
    <div class="header-text mb-4">
        <h2>Hello</h2>
        <p>We are happy to have you</p>
    </div>
   <div class="btn-group mb-4 w-100" role="group" aria-label="User Type">
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Student' ? 'active' : '' }}" data-type="Student">Student</button>
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Employee' ? 'active' : '' }}" data-type="Employee">Employee</button>
    <button type="button" class="btn btn-outline-primary {{ $activeType === 'Customer' ? 'active' : '' }}" data-type="Customer">Customer</button>
</div>

    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
    </div>
    <div class="input-group mb-3 password-wrapper">
        <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" placeholder="Password">
        <i class="bi bi-eye-slash toggle-password" id="togglePassword"></i>
    </div>
    <div class="input-group mb-5 d-flex justify-content-between">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="formCheck">
            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
        </div>
        <div class="forgot">
            <small><a href="#">Forgot Password?</a></small>
        </div>
    </div>
    <div class="input-group mb-3">
        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
    </div>
    <div class="row">
        <small>Don't have an account? <a href="/signUp">Sign Up</a></small>
    </div>
</div>
</div>
</div>

<script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            togglePassword.classList.toggle('bi-eye-slash');
            togglePassword.classList.toggle('bi-eye');
        });

        // Toggle User Type Buttons
        const buttons = document.querySelectorAll('.btn-group button');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                buttons.forEach(btn => btn.classList.remove('active'));
                // Add active class to the clicked button
                button.classList.add('active');
            });
        });
    </script>
