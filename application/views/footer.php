<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="<?php echo base_url('home/news');?>">
              News & Updates
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="#" target="_blank">Creative Member</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>asset/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>asset/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>asset/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?php echo base_url(); ?>asset/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>asset/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="<?php echo base_url(); ?>asset/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>asset/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
  <script>
    jQuery(document).scroll(function() {
  var y = jQuery(this).scrollTop();
  if (y > 50) {
    jQuery('.navbar-color-on-scroll').removeClass('navbar-transparent');
  } else {
    jQuery('.navbar-color-on-scroll').addClass('navbar-transparent');
  }
});
  </script>
</body>

</html>