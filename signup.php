  <?php require_once 'includes/header.php' ?>
  <?php require_once 'includes/common-css.php' ?>
  <?php require_once 'includes/login-form-css.php' ?>

  <div class="position-relative">
      <div class="authentication-wrapper authentication-cover">
      <!-- Logo -->
      <a href="index.php" class="auth-cover-brand d-flex align-items-center gap-2">
        <span class="app-brand-logo demo">
          <img src="assets/img/iyrologo.png" width="100px" alt="">
        </span>
      </a>
      <!-- /Logo -->
    <div class="authentication-inner row m-0">
      <!-- Left Text -->
      <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 mt-5 mt-xxl-0">
        <img alt="register-multi-steps-illustration"
          src="assets/img/illustrations/auth-register-multi-steps-illustration.png"
          class="h-auto mh-100 w-px-200" />
      </div>
      <!-- /Left Text -->

      <!--  Multi Steps Registration -->
      <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
        <div class="w-px-700 mt-5 mt-lg-0">
          <div id="multiStepsValidation" class="bs-stepper wizard-numbered">
            <div class="bs-stepper-content">
              <form name="signup" method="post" action="">

                <div class="content-header mb-3">
                  <h4 class="mb-0">User Registration</h4>
                  <small>Enter Your Details</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating form-floating-outline">
                      <input type="text" name="Company Name" id=""
                        class="form-control" placeholder="johndoe" />
                      <label for="multiStepsUsername">Company Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating form-floating-outline">
                      <input type="text" name="Full Name" id=""
                        class="form-control" placeholder="johndoe" />
                      <label for="multiStepsUsername">Full Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating form-floating-outline">
                      <input type="Designation" name="Designation" id=""
                        class="form-control" placeholder="Designation"
                        aria-label="john.doe" />
                      <label for="multiStepsEmail">Designation</label>
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="form-floating form-floating-outline">
                      <input type="email" name="Email" id=""
                        class="form-control" placeholder="john.doe@email.com"
                        aria-label="john.doe" />
                      <label for="multiStepsEmail">Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating form-floating-outline">
                      <input type="text" name="contact" id=""
                        class="form-control" placeholder="johndoe" />
                      <label for="multiStepsUsername">Mobile No.</label>
                    </div>
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input type="password" id="password" name="password"
                          class="form-control"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="multiStepsPass2" required/>
                        <label for="multiStepsPass">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                          class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="multiStepsConfirmPass2" required onkeyup="checkpassword()"/>
                        <label for="multiStepsConfirmPass">Confirm Password</label>
                      </div>
                      
                      <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i
                          class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                    <p id="passwordError" class="error"></p>
                  </div>
                   
                  <div class="col-sm-6 form-password-toggle">
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
                 
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" name="signup" value="signup" class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Create
                        Account</span>
                      <i class="mdi mdi-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- / Multi Steps Registration -->
    </div>
  </div>

  </div>
    <!-- / Content -->
  <?php require_once 'includes/common-js.php' ?>
  <?php require_once 'includes/login-form-js.php' ?>