<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
		$this->load->model('Akun_Model');
		$this->load->model('Level_Model');
        //cek session dan level user
		if($this->admin->is_role() != "admin"){
			redirect("login");
		}
	}

	public function index()
	{	
		$data = $this->Akun_Model->Get('tbl_akun');
		$data = array('data' => $data);

		$this->load->view('admin/akun_list', $data);
	}

	public function tambah()
	{
		$this->load->view('admin/akun_tambah');
	}

	public function aksi_tambah()
	{
		$nama=$_POST['nama'];
		$ket=$_POST['ket'];
		$username=$_POST['username'];
		$password = md5($_POST['password']);
		$level=$_POST['level'];

		$data = array(
			'nama' 	   => $nama,
			'ket'      => $ket,
			'username' => $username,
			'password' => $password,
			'level'    => $level
		);
		$tambah = $this->Akun_Model->tambah('tbl_akun',$data);
		if ($tambah>0) {
			// redirect('admin/akun');
			?>
			<script>
				alert("Berhasil Menambahkan Akun Baru"); document.location= '../akun';
			</script>
			<?php
		}
		else{
			echo "Gagal disimpan";
		}
	}

	public function edit($id)
	{
		// $akun=($this->Akun_Model->ambil_data_id($id, 'tbl_akun'));
		$akun=($this->Akun_Model->ambil_data_id($id));
		$data = array(
			'id_akun'  => set_value('id_akun',$akun->id_akun),
			'nama'     => set_value('nama',$akun->nama),
			'ket'      => set_value('ket',$akun->ket),
			'username' => set_value('username',$akun->username),
			'password' => set_value('password',$akun->password),
			'level'    => set_value('level',$akun->level),

			// 'tbl_level' => $this->Level_Model->Get(),
			'trigger' => $this->Level_Model->Get('tbl_level'),
			'action' => site_url('admin/akun/aksi_edit')
		);
		// var_dump($akun);
		$this->load->view('admin/akun_edit', $data);
	}

	public function aksi_edit()
	{
		$password = md5($_POST['password']);
		$data = array(
			'nama'     => $this->input->post('nama'),
			'ket'      => $this->input->post('ket'),
			'username' => $this->input->post('username'),
			'level'    => $this->input->post('level'),
			'password' => $password
		);
		$id_akun = $this->input->post('id_akun');
		$this->Akun_Model->edit_data($id_akun,$data);
		redirect(site_url('admin/akun'));
	}

	public function hapus($id)
	{
		$hapus=$this->Akun_Model->hapus_akun('tbl_akun',$id);
		if ($hapus>0) {
			// redirect('adm/akun');
			?>
			<script>
				alert("Berhasil Menghapus Akun"); document.location= '../';
			</script>
			<?php
		}
		else
		{
			echo "Gagal dihapus";
		}
	}


}
