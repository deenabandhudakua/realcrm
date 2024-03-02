<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/common-css.php' ?>

<link rel="stylesheet" href="assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
<!-- images uploads -->
<link rel="stylesheet" href="assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
<link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css" />
<link rel="stylesheet" href="assets/vendor/libs/sweetalert2/sweetalert2.css" />
<!-- end images uploads -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php require_once 'includes/menu-inner.php' ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <?php require_once 'includes/navbar.php' ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h5 class="mb-4"><span class="text-muted fw-light">System Admin /</span> Bank Info</h5>
                        <div class="row">
                            <div class="col-12 mb-4">
                              <div
                                class="bs-stepper wizard-vertical vertical wizard-vertical-icons-example wizard-vertical-icons mt-2">
                                <div class="bs-stepper-header gap-lg-2">
                                  <div class="step" data-target="#bank-details">
                                    <button type="button" class="step-trigger">
                                      <span class="avatar">
                                        <span class="avatar-initial rounded-2">
                                          <i class="mdi mdi-bank mdi-24px"></i>
                                        </span>
                                      </span>
                                      <span class="bs-stepper-label flex-column align-items-start gap-1 ms-2">
                                        <span class="bs-stepper-title">Bank Details</span>
                                      </span>
                                    </button>
                                  </div>
                                </div>
                                <div class="bs-stepper-content">
                                  <form onSubmit="return false">
                                    <!-- Account Details -->
                                    <div id="bank-details" class="content">
                                      <div class="content-header mb-3">
                                        <h6 class="mb-0">Basic Details</h6>
                                      </div>
                                       <div class="row g-4">
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="Company Name" value="Alias" placeholder="Company Name" autofocus />
                                                    <label for="Company Name">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="Company ID" value="" placeholder="Company ID" autofocus />
                                                    <label for="Company ID">Company ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" name="Company Type"
                                                        id="" value=""placeholder="Company Type" />
                                                    <label for="Company Type">Company Type</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="Compay Size" value="" placeholder="Compay Size" autofocus />
                                                    <label for="Compay Size">Compay Size</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="Incorporation No" value="" placeholder="Incorporation No" autofocus />
                                                    <label for="Incorporation No">Incorporation No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" name="Incorporation Agency"
                                                        id="" value="" placeholder="Incorporation Agency" />
                                                    <label for="Incorporation Agency">Incorporation Agency</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="date" id="" />
                                                    <label for="Incorporation Date">Incorporation Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="Incorporation Certificate" value="" autofocus placeholder="Incorporation Certificate" />
                                                    <label for="Incorporation Certificate"> Incorporation Certificate</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" name="TAX Certificate Details"
                                                        id="" value="" placeholder="TAX Certificate Details" />
                                                    <label for="TAX Certificate Details">TAX Certificate Details</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" name="PAN Details"
                                                        id="" value="" placeholder="PAN Details" />
                                                    <label for="PAN Details">PAN Details</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select id="" class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="China">China</option>
                                                        <option value="France">France</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Japan">Japan</option>
                                                    </select>
                                                    <label for="country">Country</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id="" name="state"
                                                        placeholder="State" />
                                                    <label for="state">State</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id="" name="city"
                                                        placeholder="City" />
                                                    <label for="City">City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id="" name="PIN"
                                                        placeholder="PIN" />
                                                    <label for="PIN">PIN</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <textarea name="address" class="form-control" id="address" rows="2" placeholder="1456, Mall Road" style="height: 49px;"></textarea>
                                                     <label for="address">Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <textarea name="address" class="form-control" id="address" rows="2" placeholder="Registred Office Address" style="height: 49px;"></textarea>
                                                    <label for="Registred Office Address">Registred Office Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id="" name="Email ID"
                                                        placeholder="Email ID" />
                                                    <label for="Email ID">Email ID</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id="" name="Phone No"
                                                        placeholder="Phone No" />
                                                    <label for="Phone No">Phone No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input class="form-control" type="text" id=""
                                                        name="WhatsApp No" value="" placeholder="WhatsApp No" autofocus />
                                                    <label for="WhatsApp No">WhatsApp No</label>
                                                </div>
                                            </div>

                                       <div class="col-12 d-flex justify-content-between">
                                          <button class="btn btn-outline-secondary btn-prev">
                                            <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                          </button>
                                          <button class="btn btn-primary btn-submit">Submit</button>
                                        </div> 
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
                    <?php require_once 'includes/footer.php' ?>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
<?php require_once 'includes/common-js.php' ?>


<!-- Vendors JS -->
<script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>
<!-- Page JS -->
<script src="assets/js/form-wizard-icons.js"></script>
<!-- image uploads -->
 <script src="assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<!-- Page JS -->
<script src="assets/js/pages-account-settings-account.js"></script>
<!-- end image uploads -->