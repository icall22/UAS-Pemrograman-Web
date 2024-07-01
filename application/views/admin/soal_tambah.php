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
							<h2 class="mb-3 text-primary">TAMBAH SOAL</h2>
						</div>

						<form action="<?php echo site_url('admin/soal/aksi_tambah') ?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control form-control-alternative" placeholder="Masukkan Nomor Soal" name="no_soal" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<!-- <label for="exampleFormControlSelect1">Example select</label> -->
										<select class="form-control form-control-alternative" name="kategori">
											<option>- Pilih Kategori Soal -</option>ٍ
											<option value="KAT1">Kategori 1</option>
											<option value="KAT2">Kategori 2</option>
											<option value="KAT3">Kategori 3</option>
											<option value="KAT4">Kategori 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<!-- <input type="text" placeholder="Masukkan Soal" class="form-control form-control-alternative" name="soal" required> -->
										<textarea class="form-control form-control-alternative" rows="3" placeholder="Masukkan Soal" name="soal"></textarea>
									</div>
								</div>
								<!-- jawaban -->
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