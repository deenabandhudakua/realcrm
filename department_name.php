   <?php require_once 'includes/header.php' ?>
   <?php require_once 'includes/common-css.php' ?>
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
