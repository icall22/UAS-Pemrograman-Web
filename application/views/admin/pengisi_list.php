<?php
$this->load->view('admin/header');
?>

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
                <h2 class="mb-0 text-primary">Data Pengisian</h2>
              </div>
              <div class="pull-right">
                <a href="<?php echo site_url('admin/pengisi/export_excel') ?>" class="btn btn-sm btn-success"><i class="fa fa-download"></i> DOWNLOAD</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                <tr>
                  <th scope="col" width="20px">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kategori</th>
                  <th width="70px">Nilai</th>
                  <!-- <th width="30px">Aksi</th> -->
                </tr>
              </thead>
              <tbody>
                <?php                                     
                $no=1;
                foreach ($data as $pengisi) { ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $pengisi['nama'] ?></td>
                    <td><?php 
                    $a = $pengisi['id_kategori'];
                    if($a=='1'){
                      echo "Pre Test 1";
                    }elseif($a=='2'){
                      echo "Pre Test 2";
                    }elseif($a=='3'){
                      echo "Pre Test 3";
                    }elseif($a=='4'){
                      echo "Pre Test 4";
                    }elseif($a=='5'){
                      echo "Post Test 1";
                    }elseif($a=='6'){
                      echo "Post Test 2";
                    }elseif($a=='7'){
                      echo "Post Test 3";
                    }elseif($a=='8'){
                      echo "Post Test 4";
                    }else{
                      echo "-";
                    }                     
                    
                    ?></td>
                    <td><?= $pengisi['total_jawab']; ?></td>
                   <!-- <td>
                      <a href="<?php echo site_url('admin/pengisi/lihat/'.$pengisi['id_pengisi']) ?>" class="btn btn-sm btn-primary">DETAIL</a>
                    </td>  -->
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