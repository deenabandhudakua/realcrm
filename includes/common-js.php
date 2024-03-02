    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    
    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>
    
  <script>
    (function ($) {
      'use strict'
      var currentPath = window.location.href;
      document.querySelectorAll('.menu-item > .menu-link').forEach(function (link) {
          var href = link.getAttribute('href');
          if (href && currentPath.indexOf(href) !== -1) {
              link.closest('.menu-item').classList.add('active');
          }
      });
      document.querySelectorAll('.menu-item:has(.menu-sub .active)').forEach(function (item) {
          item.classList.add('open');
      });
    })(jQuery);
    
  </script> 