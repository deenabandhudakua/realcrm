<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/common-css.php' ?>

<!-- Vendor -->
<link rel="stylesheet" href="assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
<!-- Page -->
<link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />

<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="index.php" class="auth-cover-brand d-flex align-items-center gap-2">
    <span class="app-brand-text demo text-heading fw-bold">Real Estate CRM</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
      <img src="assets/img/illustrations/auth-register-illustration-light.png" class="auth-cover-illustration w-100"
        alt="auth-illustration" data-app-light-img="illustrations/auth-register-illustration-light.png"
        data-app-dark-img="illustrations/auth-register-illustration-dark.png" />
      <img src="assets/img/illustrations/auth-cover-register-mask-light.png" class="authentication-image" alt="mask"
        data-app-light-img="illustrations/auth-cover-register-mask-light.png"
        data-app-dark-img="illustrations/auth-cover-register-mask-dark.png" />
    </div>
    <!-- /Left Text -->

    <!-- Register -->
    <div
      class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
      <div class="w-px-400 mx-auto pt-5 pt-lg-0">
        <h4 class="mb-2">Welcome to Real Estate CRM!</h4>
        <p class="mb-4">Please sign-up to your account and start the adventure</p>

        <form id="formAuthentication" class="mb-3" action="index.php">
          <div class="form-floating form-floating-outline mb-3">
            <input type="text" class="form-control" id="" name="username" placeholder="Enter your username"
              autofocus />
            <label for="username">Username</label>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="password" id="" class="form-control" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" />
                <label for="password">Password</label>
              </div>
              <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
            </div>
          </div>
            <div class="mb-3 d-flex justify-content-between">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
              <a href="forgot-password.php" class="float-end mb-1">
                <span>Forgot Password?</span>
              </a>
            </div>
          <button class="btn btn-primary d-grid w-100">Sign In</button>
        </form>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
<!-- / Content -->
<?php require_once 'includes/common-js.php' ?>

<!-- Vendors JS -->
<script src="assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>

<!-- Page JS -->
<script src="assets/js/pages-auth.js"></script>