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
              <h2 class="mb-3 text-primary">EDIT SOAL</h2>
            </div>

            <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" placeholder="Masukkan Nomor Soal" name="no_soal" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                    <select class="form-control" name="kategori">
                      <option>- Pilih Kategori Soal -</option>ٍ
                      <option value="CC-001">Achivement Orientation </option>
                      <option value="CC-002">Organizational Commitment</option>
                      <option value="CC-003">Team Work</option>

                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Soal" class="form-control form-control-alternative" name="soal" required>
                  </div>
                </div>
                <!-- Jawaban -->
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Jawaban 1" class="form-control form-control-alternative" name="jawaban1" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="number" min="1" max="5" placeholder="Point Jawaban 1" class="form-control form-control-alternative" name="point1" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Jawaban 2" class="form-control form-control-alternative" name="jawaban2" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="number" min="1" max="5" placeholder="Point Jawaban 2" class="form-control form-control-alternative" name="point2" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Jawaban 3" class="form-control form-control-alternative" name="jawaban3" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="number" min="1" max="5" placeholder="Point Jawaban 3" class="form-control form-control-alternative" name="point3" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Jawaban 4" class="form-control form-control-alternative" name="jawaban4" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="number" min="1" max="5" placeholder="Point Jawaban 4" class="form-control form-control-alternative" name="point4" required>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="text" placeholder="Masukkan Jawaban 5" class="form-control form-control-alternative" name="jawaban5" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="number" min="1" max="5" placeholder="Point Jawaban 5" class="form-control form-control-alternative" name="point5" required>
                  </div>
                </div>
                <!-- --------- -->
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