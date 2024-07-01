<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {


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

		$this->load->view("admin/home");       

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
// ----------------
	
	// public function index()
	// {
	// 	$this->load->view('admin/home');
	// }

	public function akun()
	{	
		$data = $this->Akun_Model->Get('akun');
		$data = array('data' => $data);

		$this->load->view('admin/akun_list', $data);
	}

	public function tambahakun()
	{
		$this->load->view('admin/akun_tambah');
	}

	public function aksi_tambahakun()
	{
		$nama=$_POST['nama'];
		$ket=$_POST['ket'];
		$username=$_POST['username'];
		$password = md5($_POST['password']);
		$level=$_POST['level'];
		$data = array('nama' => $nama, 'ket' => $ket,'username' => $username,'password' => $password, 'level' => $level);
		$tambah = $this->Akun_Model->tambah('akun',$data);
		if ($tambah>0) {
			// redirect('adm/akun');
			?>
			<script>
				alert("Berhasil Menambahkan Akun Baru"); document.location= 'akun';
			</script>
			<?php
		}
		else{
			echo "Gagal disimpan";
		}
	}

	public function editakun()
	{
		$this->load->view('admin/akun_edit');
	}

	public function hapusakun($id)
	{
		$hapus=$this->Akun_Model->hapus_akun('akun',$id);
		if ($hapus>0) {
			// redirect('adm/akun');
			?>
			<script>
				alert("Berhasil Menghapus Akun"); document.location= '../akun';
			</script>
			<?php
		}
		else
		{
			echo "Gagal dihapus";
		}
	}

	public function soal()
	{
		$data = $this->Akun_Model->Get('soal');
		$data = array('data' => $data);

		$this->load->view('admin/soal_list', $data);
	}

	public function lihatsoal()
	{
		$this->load->view('admin/soal_lihat');
	}

	public function tambahsoal()
	{
		$this->load->view('admin/soal_tambah');
	}

	public function aksi_tambahsoal()
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

	public function editsoal()
	{
		$this->load->view('admin/soal_edit');
	}

	public function hapussoal($id)
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

	public function pengisi()
	{
		$data = $this->Akun_Model->Get('pengisi');
		$data = array('data' => $data);

		$this->load->view('admin/pengisi_list', $data);
	}

	public function lihatpengisi()
	{
		$this->load->view('admin/pengisi_lihat');
	}
}
