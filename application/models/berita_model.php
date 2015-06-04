<?php
class berita_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	#menampilkan data berita
	public function daftar_berita($read = false){
		if($read === false){
			$query	= $this->db->query('SELECT * FROM berita WHERE status_berita="Publish" ORDER BY id_berita DESC');
			return $query->result_array();
		}
		
		$query	= $this->db->get_where('berita', array('slug'=>$read));
		return $query->row_array();
	}
}