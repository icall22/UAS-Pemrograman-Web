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
              <h2 class="mb-3 text-primary">EDIT AKUN</h2>
            </div>

            <form action="<?php echo $action;?>" method="post">
              <div class="row">

                <input type="hidden" name="id_akun" value="<?= $id_akun; ?>">
                <input type="hidden" name="level" value="<?= $level; ?>">

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" value="<?= $nama;?>" name="nama" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" value="<?= $ket;?>" name="ket" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" value="<?= $username;?>" name="username" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control form-control-alternative" name="level">
                      <option selected="" value="<?= $level ?>"><?= $level ?></option>
                        <?php foreach ($trigger as $data): ?>
                          <option value="<?= $data['level']?>"><?= $data['level']?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-alternative" placeholder="Masukkan Password" name="password" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">

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

<!--     <option>
      <?php 
      $get_level = $level;
      $sql = $conn->query("SELECT * FROM tbl_level");
      while ($data = $sql->fetch_assoc()) {
       if ($data['level'] == $get_level) {
        ?>
        <option selected="" value="<?= $data['level']; ?>"><?= $data['level']; ?></option>
        <?php
      } else {
        ?>
        <option value="<?= $data['level']; ?>"><?= $data['level']; ?></option>
        <?php                      
      }
    } 
    ?>
  </option> -->