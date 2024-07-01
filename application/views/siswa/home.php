<?php
$this->load->view('siswa/header');
?>

<head>
  <link rel="stylesheet" href="assets/css/aos.css">
</head>

<!-- Header -->
<div class="header pb-9 pt-5 pt-lg-0 d-flex align-items-center" style="min-height: 600px;">
  <!-- Mask -->
  <span class="mask opacity-8"></span>
  <!-- Header container -->
  <div class="container">
    <div class="row align-items-center">
      <!-- ---- -->
      <div class="col-md-6 banner-left">
        <h1 data-aos="fade-down" class="display-3 text-white">Welcome!</h1>
        <h2 data-aos="fade-down" data-aos-delay="200" class="text-white">
          <?= $this->session->userdata("user_nama") ?>
        </h2>
        <p data-aos="fade-down" data-aos-delay="300" class="text-white mt-0 mb-4">
          Di Aplikasi <b><b>Skills Education</b></b>
        </p>
        <!-- <a href="<?php echo base_url(); ?>siswa/pretest" class="btn btn-white mt-3" role="button" data-aos="fade-down" data-aos-delay="700"><b>Mulai</b></a> -->
      </div>
      <!-- ---- -->
      <div data-aos="fade-up" data-aos-delay="700" class="col-md-6 banner-right text-center">
        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/b1.png" alt="Gambar Banner">
      </div>
    </div>
  </div>

  <!-- --- -->
</div>
<!-- Page content -->
<div class="container-fluid mt--8">


  <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/vendor/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.parallax-scroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/dopeNav.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out-quart',
      once: true,
    });
  </script>

  <?php
  $this->load->view('footer');
  ?>