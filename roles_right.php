<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/common-css.php' ?>

<link rel="stylesheet" href="assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />


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
                        <h5><span class="text-muted fw-light">System Admin /</span> Roles & Right</h5>
                        <div class="row mb-4">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead class="table-light">
                                        <tr>
                                          <th class="text-nowrap">Module</th>
                                          <th class="text-nowrap text-center"><input type="checkbox" class="form-check-input"> Read</th>
                                          <th class="text-nowrap text-center"><input type="checkbox" class="form-check-input"> Write</th>
                                          <th class="text-nowrap text-center"><input type="checkbox" class="form-check-input"> Edit</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-nowrap text-heading">New for you</td>
                                          <td>
                                            <div class="form-check mb-0 d-flex justify-content-center">
                                              <input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-check mb-0 d-flex justify-content-center">
                                              <input class="form-check-input" type="checkbox" id="defaultCheck2" checked="">
                                            </div>
                                          </td>
                                          <td>
                                            <div class="form-check mb-0 d-flex justify-content-center">
                                              <input class="form-check-input" type="checkbox" id="defaultCheck3" checked="">
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
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
<!-- Company Info tab JS -->
<script src="assets/js/form-wizard-icons.js"></script>
