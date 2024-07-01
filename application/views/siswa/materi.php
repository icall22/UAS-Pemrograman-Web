<?php
$this->load->view('siswa/header');
?>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row mt-2">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="mb-0 text-primary">Data Materi</h2>
              </div>
<!--                   <div class="pull-right">
                    <a href="?hal=tambah_akun" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> TAMBAH AKUN</a>
                  </div> -->
                </div>
              </div>
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="example">
                  <thead class="thead-light">
                    <tr>
                      <th width="80px">No</th>
                      <th>Nama Materi</th>
                      <th >Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php                                     
                    $no=1;
                    foreach ($data as $materi) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $materi['nama_materi'];?></td>
                        <td>
                          <a href="<?= base_url(); ?>assets/login/materi/<?= $materi['nama_file'];?>" class="btn btn-sm btn-primary">DOWNLOAD MATERI</a>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>


        <?php
        $this->load->view('footer');
        ?>