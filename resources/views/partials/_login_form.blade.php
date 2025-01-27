<div class="global_login">
<div class="row align-items-center">
    <div class="header-text mb-4">
        <h2>Hello</h2>
        <p>We are happy to have you</p>
    </div>
    @include('partials._user_type', ['activeType' => $activeType ?? 'Student'])

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
        <small>Don't have an account? <a href="#">Sign Up</a></small>
    </div>
</div>
</div>
