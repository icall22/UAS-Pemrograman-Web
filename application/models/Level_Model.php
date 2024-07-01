<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_Model extends CI_Model {

	public $table = 'level';
	public $id = 'id_level';

	public function Get($table)
	{
		$res = $this->db->get($table);
		return $res->result_array();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		// $this->db->where('id_akun',$id);
		return $this->db->get($this->table)->row();
	}

	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table,$data);
	}
	
}
?>