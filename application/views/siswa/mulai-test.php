<?php
$this->load->view('siswa/header');
?>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
</div>
<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-xl-12">
      <div class="card shadow">

          <br>
          <br>
          <div class="col-auto" style="text-align: center;">
            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
              <i class="fas fa-exclamation"></i>
            </div>
          </div>
          <div class="card-body">
            <h1 class="display-3 text-danger" style="text-align: center;"><b>MOHON MAAF</b></h1>
            <h3 style="text-align: center;">Anda Sudah Mengisi</h3>
          </div>
          <br>
  


          <br>
          <br>
          <div class="col-auto" style="text-align: center;">
            <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
              <i class="fas fa-exclamation"></i>
              <!-- <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> -->
            </div>
          </div>
          <div class="card-body text-center">
            <form action="?hal=soal1" method="POST">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="siap"><b>KLIK MULAI</b></button>
            </form>
            <br>
            <h3 style="text-align: center;">Untuk Memulai Mengerjakan Pre Test</h3>

          </div>
          <br>



        </div>
      </div>
    </div>

    <?php
    $this->load->view('footer');
    ?>