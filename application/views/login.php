<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Login | Skills Education
  </title>
  <!-- Favicon -->
  <link href="<?php echo base_url(); ?>assets/img/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>assets/login/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/login/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
    rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/login/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-primary">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    </nav>
    <!-- Header -->
    <div class="header py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-5">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-4">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <a class="navbar-brand" href="">
                  <img src="<?php echo base_url(); ?>assets/login/img/logo.png" width="200px" />
                </a>
                <!-- <h2>Login</h2> -->
              </div>
              <form action="<?php echo base_url() ?>login" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control text-primary" placeholder="Masukkan Username" type="text" name="username"
                      required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text "><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control text-primary" placeholder="Masukkan Password" type="password"
                      name="password" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" name="login">Login</button>
                </div>
              </form>


              <?= $this->session->flashdata('message'); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="py-2">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-12">
            <div class="copyright text-center text-muted">
              <a href="" class="font-weight-bold ml-1" target="_blank">© 2024 Faisal Akbar Nggori</a>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="<?php echo base_url(); ?>assets/login/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/login/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo base_url(); ?>assets/login/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="<?php echo base_url(); ?>assets/https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>