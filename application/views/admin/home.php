<?php
$this->load->view('admin/header');
?>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">

        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h1 font-weight-bold mb-0 text-primary">
                    <?php
                    $query = $this->db->query('SELECT * FROM tbl_soal');
                    echo $query->num_rows();
                    ?>
                  </span>
                  <!-- <h3 class="card-title text-uppercase text-muted mb-0">Soal Core</h3> -->
                  <h4 class="card-title text-muted mb-0">Data Soal</h4>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="fas fa-book"></i>                       
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <a href="<?php echo base_url(); ?>admin/soal">
                  <span class="text-primary mr-2"><i class="fas fa-arrow-right"></i></span>
                  <span class="text-primary">Selengkapnya</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h1 font-weight-bold mb-0 text-primary">
                    <?php
                    $query = $this->db->query('SELECT * FROM pengisi');
                    echo $query->num_rows();
                    ?>
                  </span>
                  <h4 class="card-title text-muted mb-0">Data Pengisi</h4>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <a href="<?php echo base_url(); ?>admin/pengisi">
                  <span class="text-primary mr-2"><i class="fas fa-arrow-right"></i></span>
                  <span class="text-primary">Selengkapnya</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h1 font-weight-bold mb-0 text-primary">
                    <?php
                    $query = $this->db->query('SELECT * FROM tbl_akun');
                    echo $query->num_rows();
                    ?>
                  </span>
                  <h4 class="card-title text-muted mb-0">Data Akun</h4>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <a href="<?php echo base_url(); ?>admin/akun">
                  <span class="text-primary mr-2"><i class="fas fa-arrow-right"></i></span>
                  <span class="text-primary">Selengkapnya</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h1 font-weight-bold mb-0 text-primary">
                    <?php
                    $query = $this->db->query('SELECT * FROM materi');
                    echo $query->num_rows();
                    ?>
                  </span>
                  <h4 class="card-title text-muted mb-0">Data Materi</h4>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
                <a href="<?php echo base_url(); ?>admin/materi">
                  <span class="text-primary mr-2"><i class="fas fa-arrow-right"></i></span>
                  <span class="text-primary">Selengkapnya</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <!-- --- -->
      </div>
    </div>
  </div>
</div>


<div>

  <?php
  $this->load->view('footer');
  ?>