<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Willy IOS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/aos/aos.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.3.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo base_url(''); ?>">Ambil Antrian</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Header ======= -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Antrian</h1>
          <h2>Untuk Mengambil Antrian Silakan <b style="color:brown;text-decoration:underline;font-size:24px">SCROLL DOWN</b>Pilih Antrian Sesuai Pelayanan Yang Anda Butuhkan</h2>
        </div>
      </div><br>
      <div class="text-center">
      <a href="#" class="btn btn-primary align-items-center justify-content-center">SCROLL DOWN<i class="bi bi-arrow-down-short"></i></a>
      </div>
<!--     <div class="container">
<?php
        if(!empty(session()->getFlashdata('success'))){ ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
             
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>
 
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
             
        <?php } ?>
 
        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>
             
        <?php } ?>
    </div> -->
      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-customer-service-2-fill"></i></div>
            <h4 class="title"><a href="<?php echo base_url('antrian/cs/4'); ?>">CUSTOMER SERVICE</a></h4>
            <p class="description">Ambil Antrian di sini untuk Pelayanan CUSTOMER SERVICE</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-user-voice-fill"></i></div>
            <h4 class="title"><a href="<?php echo base_url('antrian/pg/5'); ?>">PENGADUAN</a></h4>
            <p class="description">Ambil Antrian di sini untuk Pelayanan PENGADUAN</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="ri-user-add-fill"></i></div>
            <h4 class="title"><a href="<?php echo base_url('antrian/pb/6'); ?>">PERMOHONAN BARU</a></h4>
            <p class="description">Ambil Antrian di sini untuk Pelayanan PERMOHONAN BARU</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="ri-team-fill" style="text-align:center"></i></div>
            <h4 class="title"><a href="<?php echo base_url('antrian/png/7'); ?>">PERPANJANGAN</a></h4>
            <p class="description">Ambil Antrian di sini untuk Pelayanan PERPANJANGAN</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->



    <!-- ======= Clients Section ======= -->
    

    <!-- ======= Testimonials Section ======= -->
   

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; 2021<strong><span>UNIVERSITAS PELITA BANGSA</span></strong>. Teknik Informatika
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designs BY <a href="https://bootstrapmade.com/">WILIANTO</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/aos/aos.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>