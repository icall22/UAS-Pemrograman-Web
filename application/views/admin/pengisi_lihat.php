<?php
$this->load->view('admin/header');
?>

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
</div>
<div class="container-fluid mt--9">
  <div class="row mt-2">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="mb-0 text-primary">Hasil Pengisian dari</h2>
            </div>
<!--             <div class="pull-right">
              <a href="" class="btn btn-sm btn-success"><i class="fa fa-download"></i> DOWNLOAD</a>
            </div> -->
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Pre Test</th>
                <th scope="col">Pos Test</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td>Kategori 1</td>
                <td>Selesai</td>
                <td>Selesai</td>
                <td>Meningkat</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Kategori 1</td>
                <td>Selesai</td>
                <td>Selesai</td>
                <td>Meningkat</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Kategori 1</td>
                <td>Selesai</td>
                <td>Selesai</td>
                <td>Meningkat</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Kategori 1</td>
                <td>Selesai</td>
                <td>Selesai</td>
                <td>Meningkat</td>
              </tr>

            </tbody>
          </table>

          <div class="col">
            <hr class="my-4" />
            <p><b><b>Pre Test</b></b></p>
            <p>
              Keterangan Hasil Pre Test Keterangan Hasil Pre Test Keterangan Hasil Pre Test
            </p>
            <hr class="my-4" />

            <p><b><b>Post Test</b></b></p>
            <p>
              Keterangan Hasil Post Test
            </p>
            <hr class="my-4" />
          </div>

        </div>
      </div>
    </div>
  </div>



  <?php
  $this->load->view('footer');
  ?>