<!DOCTYPE html>
<html>
  
<!-- Mirrored from www.bublinastudio.com/flattybs3/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 12:15:29 GMT -->
<head>
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='<?php echo base_url()?>assets/mobile/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/plugins/fullcalendar/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/plugins/common/bootstrap-wysihtml5.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="<?php echo base_url('')?>assets/mobile/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-red '>
    
    <div id='wrapper'>
      <div id='main-nav-bg'></div>
      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>

              <!--
              <div class='page-header page-header-with-buttons'>
                <h1 class='pull-left'>
                  <span>Sistem Pendukung Keputusan</span>
                </h1>
                </div>
              </div>

              <div class='alert alert-info alert-dismissable'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                Welcome to
                <strong>Flatty (v2.2)</strong>
                - I hope you'll like it. Don't forget - you can change theme color in top right corner
                <i class='icon-cog'></i>
                if you want.
              </div>
              -->
              <br>
              <div class='row'>
                <div class='col-sm-12 col-md-6'>
                  <div class='box'>
                    <div class='box-header'>
                      <div class='title'>
                        <b style="font-size: 20px">
                          Cara Penggunaan Aplikasi
                        </b>
                        <h4>Langka 1 : Tentukan Data Alternatif</h4>
                        <ul>
                          <li>Untuk menuju data alternatif, cukup menekan tombol alternatif pada menu alternatif yang berada di halaman utama</li>
                          <li>Pada halaman alternatif terdapat daftar nama alternatif (varietas kedelai) dan status aktif atau non aktif</li>
                          <li>Status alternatif berfungsi untuk menentukan alternatif yang akan dihitung</li>
                          <li>Untuk merubah status alternatif, cukup <b>menahan</b> salah satu alternatif yang akan dirubah statusnya. Dan setelah itu akan muncul kotak dialog apakah ingin perbarui status ? jika pilihan ya, maka akan tampil halaman untuk merubah status alternatif</li>
                          <li>Selain halaman ubah status alternatif, terdapat juga halaman informasi detail nilai masing-masing alternatif</li>
                          <li>Untuk menuju detail nilai alternatif, cukup <b>menekan</b> salah satu alternatif yang ingin dilihat nilai alternatifnya</li>
                        </ul>
                        <h4>Langkah 2 : Melihat Kriteria</h4>
                        <ul>
                          <li>Pada halaman kriteria hanya terdapat daftar data krieria pengembilan keputusan</li>
                        </ul>
                        <h4>Langkah 3 : Melakukan Pembobotan</h4>
                        <ul>
                          <li>Pembobotan berfungsi untuk mengatur bobot kriteria pengambilan keputusan</li>
                          <li>Untuk mengatur bobot kriteria, dilakukan penentuan bobot awal kriteria dengan menggunakan skala kriteria yang telah disediakan</li>
                          <li>Setelah bobot awal selesai dilakukan, maka aplikasi akan otomatis menghitung atau memperbaiki bobot awal ke bobot akhir</li>
                          <li>Bobot akhir akan digunakan untuk proses pehitungan selanjutnya, untuk mencari alternatif terbaik</li>
                          <li>Untuk merubah bobot kriteria, anda cukup menahan salah satu kriteria yang bobotnya akan dirubah</li>
                        </ul>
                        <h4>Langkah 4 : Perangkingan / Hasil Perhitungan</h4>
                        <ul>
                          <li>Proses perhitungan untuk mencari alternatif terbaik akan otomatis terhitung oleh aplikasi</li>
                          <li>Hasil perhitungan akan ditampilkan pada halaman menu perangkingan</li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- / jquery [required] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/flot/excanvas.js" type="text/javascript"></script>
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/flot/flot.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('')?>assets/mobile/javascripts/plugins/flot/flot.resize.js" type="text/javascript"></script>
    
    <script src="assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/common/wysihtml5.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/common/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->
  </body>

<!-- Mirrored from www.bublinastudio.com/flattybs3/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 12:16:33 GMT -->
</html>
