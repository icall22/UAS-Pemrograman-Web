<?php
$this->load->view('admin/header');
?>

<style>
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.75rem;
    padding: 0.625rem 0.75rem;
    line-height: 1.5;
    color: white;
    content: "Browse";
    background-color: #007bff;
    border-left: 1px solid #cad1d7;
    border-radius: 0 0.375rem 0.375rem 0;
    cursor: pointer !important;
}
#hasError{
  color: red;
}
</style>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>

<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9" id="frm-edit-materi">
    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body">
            <div class="col">
              <h2 class="mb-3 text-primary">EDIT MATERI</h2>
            </div>

            <form action="<?php echo base_url()?>admin/materi/updateData" method="post" enctype="multipart/form-data">
              <div class="row">

                <input type="hidden" name="id_materi" value="<?= $id_materi; ?>">
                <input type="hidden" name="file-lama" value="<?= $nama_file; ?>">

                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" id="nama_materi" value="<?= $nama_materi;?>" name="nama_materi" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control form-control-alternative" id="akses" name="akses">
                      <option>- Hak Akses -</option>
                      <option value="Siswa">Siswa</option>
                      <option value="Guru">Guru</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" value="<?= $nama_file;?>" id="file" name="file">
                    <label class="custom-file-label" for="customFile">Pilih file (mp4, doxc, pptx)</label>
                    <span id="hasError" style="display:none">File harus berformat docx, mp4, pptx</span>
                  </div>
                </div>

              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-2" id="btn-save-edit" name="simpan">Simpan</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>



  <?php
  $this->load->view('footer');
  ?>
