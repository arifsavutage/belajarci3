<?php
class berita_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	#menampilkan data berita
	public function daftar_berita(){
		$query	= $this->db->query('SELECT berita.judul, berita.status_berita,
			berita.slug, berita.id_berita, berita.tanggal,
			users.nama
		FROM
			berita, users
		WHERE
			berita.id_user = users.id_user
		ORDER BY berita.id_berita DESC
		');
		
		return $query->result_array();
	}
	
	#menambah berita
	public function tambah($data){
		return $this->db->insert('berita',$data);
	}
	
	#ambil detail berita
	public function detail_berita($id = false){
		if($id === false){
			$query	= $this->db->get('berita');
			return $query->result_array();
		}
		
		$query	= $this->db->get_where('berita', array('id_berita'=>$id));
		return $query->row_array();
	}
	
	#update berita
	public function edit_berita($data){
		$this->db->where('id_berita',$data['id_berita']);
		return $this->db->update('berita',$data);
	}
	
	#hapus berita
	public function delete_berita($id){
		$this->db->where('id_berita', $id);
		return $this->db->delete('berita');
	}
}