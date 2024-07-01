<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Skills Education
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url(); ?>assets/img/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700,800,900&display=swap"
    rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>assets/login/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/login/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
    rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/login/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!--   <link rel="stylesheet" href="assets/login/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/login/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/login/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css"> -->


</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="">
        <img src="<?= base_url(); ?>assets/login/img/logo.png" class="navbar-brand-img" alt="assets.">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <!-- <img alt="Image placeholder" src="assets/login/img/theme/team-1-800x800.jpg"> -->
                <i class="fa fa-user"></i>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?php echo base_url() ?>siswa/dashboard/logout" class="dropdown-item">
              <i class="ni ni-button-power text-primary"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img src="<?php echo base_url(); ?>assets/login/img/logo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" nav-link" href="<?php echo base_url(); ?>siswa/dashboard">
              <i class="ni ni-tv-2 text-blue"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="<?php echo base_url(); ?>siswa/test/pre1">
              <i class="ni ni-bullet-list-67 text-blue"></i> Pre Test
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="<?php echo base_url(); ?>siswa/materi">
              <i class="ni ni-book-bookmark text-blue"></i> Materi
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="<?php echo base_url(); ?>siswa/test/post1">
              <i class="ni ni-bullet-list-67 text-blue"></i> Post Test
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="<?php echo base_url(); ?>siswa/hasil">
              <i class="ni ni-collection text-blue"></i> Hasil Test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url(); ?>siswa/ubahpassword">
              <i class="ni ni-single-02 text-blue"></i> Ubah Password
            </a>
          </li>
        </ul>

        <!-- Divider -->
        <hr class="my-3">

      </div>
    </div>
  </nav>

  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href=""></a>

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <!-- <i class="ni ni-single-02"></i> -->
                  <i class="fa fa-user"></i>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
                    <?= $this->session->userdata("user_nama") ?>
                  </span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="<?php echo base_url() ?>siswa/dashboard/logout" class="dropdown-item">
                <i class="ni ni-button-power text-blue"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="header bg-default pb-8 pt-5 pt-md-8">

      <!-- tempat isi -->