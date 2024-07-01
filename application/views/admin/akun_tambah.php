<?php
$this->load->view('admin/header');
?>


<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body">
            <div class="col">
              <h2 class="mb-3 text-primary">TAMBAH AKUN</h2>
            </div>

            <form action="<?php echo site_url('admin/akun/aksi_tambah') ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Nama Lengkap" name="nama" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Keterangan" name="ket" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Username" name="username" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-alternative" placeholder="Masukkan Password" name="password" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control form-control-alternative" name="level">
                      <option>- Pilih Level Akun -</option>
                      <option value="Siswa">Siswa</option>
                      <option value="Guru">Guru</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-2" name="simpan">Simpan</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>



    <?php
    $this->load->view('footer');
    ?>