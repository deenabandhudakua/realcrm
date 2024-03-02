   <?php require_once 'includes/header.php' ?>
    <?php require_once 'includes/common-css.php' ?>
    <?php require_once 'includes/login-form-css.php' ?>

    <div class="authentication-wrapper authentication-cover">
      <!-- Logo -->
      <a href="index.php" class="auth-cover-brand d-flex align-items-center gap-2">
  
        <span class="app-brand-text demo text-heading fw-bold">Real Estate CRM</span>
      </a>
      <!-- /Logo -->
      <div class="authentication-inner row m-0">
        <!-- /Left Section -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-5 pb-2">
          <img
            src="assets/img/illustrations/auth-login-illustration-light.png"
            class="auth-cover-illustration w-100"
            alt="auth-illustration"
            data-app-light-img="illustrations/auth-login-illustration-light.png"
            data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
          <img
            src="assets/img/illustrations/auth-cover-login-mask-light.png"
            class="authentication-image"
            alt="mask"
            data-app-light-img="illustrations/auth-cover-login-mask-light.png"
            data-app-dark-img="illustrations/auth-cover-login-mask-dark.png" />
        </div>
        <!-- /Left Section -->
        <!-- Login -->
        <div
          class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-4 py-4">
          <div class="w-px-400 mx-auto pt-5 pt-lg-0">
            <h4 class="mb-2">Welcome to Real Estate CRM!</h4>
            <p class="mb-4">Please sign-up to your account and start the adventure</p>

            <form id="formAuthentication" class="mb-3" action="index.php">
              <div class="form-floating form-floating-outline mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email-username"
                  placeholder="Enter your email or username"
                  autofocus />
                <label for="email">Email or Username</label>
              </div>
       <!--        <div class="mb-3">
                <div class="form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="password">Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>
              </div> -->
                 <div class="mb-3">
            <div class="form-password-toggle">
              <div class="input-group input-group-merge col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="captcha" class="form-control" name="captcha" placeholder="Enter Your Captcha">
                  <input type="hidden" name="captcha-rand" value="2760">
                  <label for="captcha">Captcha:</label>
                </div>
                <div class="col-md-6 captcha">
                  <div class="captcha">2760</div>
                </div>
              </div>
            </div>
          </div>
  
              <button class="btn btn-primary d-grid w-100">Next</button>
            </form>

          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>
    <!-- / Content -->
    <?php require_once 'includes/common-js.php' ?>
    <?php require_once 'includes/login-form-js.php' ?>