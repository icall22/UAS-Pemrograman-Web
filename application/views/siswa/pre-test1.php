<?php
$this->load->view('siswa/header');
?>


<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
  <!-- </div> -->
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-xs-12">
          <form role="form" action="<?= site_url('siswa/test/tambah_pre1') ?>" method="POST" style="text-align: justify;">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
               <div class="col">
                <h1 class="card-title text-uppercase text-blue mb-0" style="text-align: center;"><b>PRE TEST</b></h1><br/>

                <div class="text-center">
                  <!-- <h2 class="text-primary pull-center"><b><?= number_format(8/45*100); ?> %</b></h2> -->
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-body">

              <?php $no=1; foreach ($data as $soal): ?>
              <div class="form-group">

                <input type="hidden" name="username" value="<?= $this->session->userdata("user_name") ?>">
                <input type="hidden" name="id_kategori" value="1">
                <p class=""><b><b><?= $no++; ?>. </b><?= $soal['soal'];?></b></p>

                <!-- //Jawaban -->
                <div class="custom-control custom-radio mb-3">
                  <input name="j<?= $soal['no_soal'];?>" class="custom-control-input" id="4<?= $soal['no_soal'];?>" type="radio" value="4" required>
                  <label class="custom-control-label" for="4<?= $soal['no_soal'];?>">Sangat Sesuai</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input name="j<?= $soal['no_soal'];?>" class="custom-control-input" id="3<?= $soal['no_soal'];?>" type="radio" value="3">
                  <label class="custom-control-label" for="3<?= $soal['no_soal'];?>">Sesuai</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input name="j<?= $soal['no_soal'];?>" class="custom-control-input" id="2<?= $soal['no_soal'];?>" type="radio" value="2">
                  <label class="custom-control-label" for="2<?= $soal['no_soal'];?>">Tidak Sesuai</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input name="j<?= $soal['no_soal'];?>" class="custom-control-input" id="1<?= $soal['no_soal'];?>" type="radio" value="1">
                  <label class="custom-control-label" for="1<?= $soal['no_soal'];?>">Sangat Tidak Sesuai</label>
                </div>
                <!-- //Jawaban -->

              </div>
            <?php endforeach; ?>

            <!-- batas soal -->
            <button class="col-md-2 btn btn-primary pull-right" type="submit" name="simpan">Selanjutnya</button>

          </div>
        </div><!-- card stats -->
      </form>
    </div>
  </div>
</div>
</div>
<!-- </div>
</div> -->



<?php
$this->load->view('footer');
?>