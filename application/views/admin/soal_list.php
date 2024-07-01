<?php
$this->load->view('admin/header');
?>


<head>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
</head>

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
                <h2 class="mb-0 text-primary">Data Soal</h2>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>admin/soal/tambah" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> TAMBAH SOAL</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <!-- <table class="table align-items-center table-flush" id="datatable-buttons"> -->
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="20px">No</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Kategori</th>
                    <th width="30px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php                                     
                  $no=1;
                  foreach ($data as $soal) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <!-- <td><?= substr($soal['soal'], 0,50); ?> ...</td> -->
                      <td><?= $soal['soal']; ?></td>
                      <td>
                        <?php 
                        $data2 = $soal['kategori'];
                        if($data2=='KAT1'){
                          echo "Kategori 1";
                        }else if($data2=='KAT2'){
                          echo "Kategori 2";
                        }else if($data2=='KAT3'){
                          echo "Kategori 3";
                        }else if($data2=='KAT4'){
                          echo "Kategori 4";
                        }else {
                          echo "?";
                        }
                        ?>  
                      </td>
                      <td>
                        <!-- <a href="<?php echo site_url('admin/soal/lihat/'.$soal['id_soal']) ?>" class="btn btn-sm btn-primary">LIHAT</a>
                        <a href="<?php echo site_url('admin/soal/edit/'.$soal['id_soal']) ?>" class="btn btn-sm btn-success">EDIT</a> -->
                        <a href="<?php echo site_url('admin/soal/hapus/'.$soal['id_soal']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



      <?php
      $this->load->view('footer');
      ?>