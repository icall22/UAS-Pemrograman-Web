</div>
</div>

<!-- <div class="container-fluid mt--7"> -->
<div class="container-fluid">
  <!-- Footer -->
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
          &copy; 2024 Faisal Akbar Nggori
        </div>
      </div>
    </div>
  </footer>
</div>
<!--   Core   -->
<script src="<?php echo base_url(); ?>assets/login/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/login/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<script src="<?php echo base_url(); ?>assets/login/js/plugins/chart.js/dist/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/login/js/plugins/chart.js/dist/Chart.extension.js"></script>
<!--   Argon JS   -->
<script src="<?php echo base_url(); ?>assets/login/js/argon-dashboard.min.js?v=1.1.0"></script>
<!--     <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
    </script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

  $(document).ready(function () {

    $('#submit').submit(function (e) {
      e.preventDefault();
      $('#btn-simpan').html("Sending...");
      $.ajax({
        url: "<?php echo base_url(); ?>admin/tambah_materi",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
          console.log(data);
          alert("Upload berhasil");
        }
      });
    });

    $("#btn-edit-materi").click(function (e) {
      e.preventDefault();
      // var link = $(this).attr("href");
      // var id = link.substring(link.lastIndexOf('/')+1);
      // $.ajax({
      //   url: "<?php echo base_url(); ?>admin/getMateri/"+id,
      //   type: "POST",
      //   dataType: "JSON",
      //   success: function(data){
      //     $("#frm-tabel-materi").hide();
      //     $("#frm-edit-materi").show();
      //     $("#form-title").html("EDIT MATERI "+data.nama_materi);
      //     $("#nama_materi").val(data.nama_materi);
      //     $(".custom-file-label").html(data.nama_file);
      //   }
      // });
    });

    $("#batal").click(function () {
      $("#frm-tabel-materi").show();
      $("#frm-edit-materi").hide();
    });

    $('#example').DataTable({
      "language": {
        "info": "Menampilkan _START_ sampai _END_ dari jumlah data",
        "sInfoEmpty": "",
        "sInfoFiltered": "(terfilter dari _MAX_ data)",
        "emptyTable": "<center><img src='<?php echo base_url() ?>assets/data/not-found.svg' width='100' /><br><strong>Tidak ada hasil ditemukan</strong></center>",
        "sLengthMenu": "Data per Halaman: _MENU_",
        "sLoadingRecords": "<img src='<?php echo base_url() ?>assets/data/ajax-loader.svg' /><br>Silakan tunggu, data sedang di-load...",
        "sProcessing": "<img src='<?php echo base_url() ?>assets/data/ajax-loader.svg' />",
        "sSearch": "Cari Data:",
        "sSearchPlaceholder": "Masukkan kata kunci...",
        "sZeroRecords": "<center><img src='<?php echo base_url() ?>assets/data/not-found.svg' width='100' /><br><strong>Tidak ada hasil ditemukan</strong></center>",
        "paginate": {
          "first": "Pertama",
          "last": "Terakhir",
          "previous": "Sebelumnya",
          "next": "Berikutnya"
        }
      },
    });
  });

  $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    var extension = fileName.split('.').pop();
    console.log(extension);
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    if (extension == 'PNG' || extension == 'docx' || extension == 'pptx' || extension == 'mp4') {
      $("#hasError").hide();
      $("#btn-simpan").attr("disabled", false);
    } else {
      $("#hasError").show();
      $("#btn-simpan").attr("disabled", true);
    }

  });
</script>

<script src="<?php echo base_url(); ?>assets/login/js/chart.min.js"></script>
<!-- <script src="assets/login/js/chart.js"></script> -->

</body>

</html>