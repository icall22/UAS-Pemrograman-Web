<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
        //cek session dan level user
		if($this->admin->is_role() != "admin"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Akun_Model->Get('tbl_soal');
		$data = array('data' => $data);

		$this->load->view('admin/soal_list', $data);
	}

	public function lihat()
	{
		$this->load->view('admin/soal_lihat');
	}

	public function tambah()
	{
		$this->load->view('admin/soal_tambah');
	}

	public function aksi_tambah()
	{
		$no_soal=$_POST['no_soal'];
		$soal=$_POST['soal'];
		$kategori=$_POST['kategori'];
		$data = array('no_soal' => $no_soal, 'soal' => $soal,'kategori' => $kategori);
		$tambah = $this->Akun_Model->tambah('soal',$data);
		if ($tambah>0) {
			// redirect('admin/soal');
			?>
			<script>
				alert("Berhasil Menambahkan Soal Baru"); document.location= 'soal';
			</script>
			<?php
		}
		else{
			echo "Gagal disimpan";
		}
	}

	public function edit()
	{
		$this->load->view('admin/soal_edit');
	}

	public function aksi_edit()
	{
		$this->load->view('admin/soal_edit');
	}

	public function hapus($id)
	{
		$hapus=$this->Akun_Model->hapus_soal('soal',$id);
		if ($hapus>0) {
			// redirect('adm/soal');
			?>
			<script>
				alert("Berhasil Menghapus Soal"); document.location= 'soal';
			</script>
			<?php
		}
		else
		{
			echo "Gagal dihapus";
		}
	}

}
