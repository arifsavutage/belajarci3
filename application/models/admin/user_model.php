<?php
class user_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function daftar_user(){
		$query	= $this->db->query("SELECT 
			id_user, nama, email, username, password
		FROM users
		ORDER BY id_user DESC");
		
		return $query->result_array();
	}
	
	public function tambah($data){
		return $this->db->insert('users', $data);
	}
}