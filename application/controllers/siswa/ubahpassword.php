<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
        //cek session dan level user
		if($this->admin->is_role() != "siswa"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Akun_Model->Get('tbl_akun');
		$data = array('data' => $data);

		$this->load->view('siswa/ubah-password', $data);
	}

	public function aksi_ubah()
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
		// redirect(site_url('siswa/dashboard'));
		?>
		<script>
			alert("Password anda berhasil diubah !"); document.location= '../Dashboard';
		</script>
		<?php
	}
}
