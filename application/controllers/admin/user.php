<?php
if(!defined('BASEPATH'))exit('No direct script allowed');

class user extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/user_model');
	}
	
	public function index(){
		$query	= $this->user_model->daftar_user();
		$data	= array('title'=>'Manajemen User',
			'user'=>$query,
			'isi'=>'admin/user/user_view'
		);
		
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	public function tambah(){
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('email','E-mail Aktif','required');
		$this->form_validation->set_rules('uname','User Name','required');
		$this->form_validation->set_rules('pass','Password','required');
		
		if($this->form_validation->run() === false){
			$data	= array('title'=>'Menambah User',
				'isi'=>'admin/user/tambah_user'
			);
			
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$data	= array(
				'nama'=>$this->input->post('nama'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('uname'),
				'password'=>$this->input->post('pass')
			);
			
			$this->user_model->tambah($data);
			redirect(base_url().'admin/user');
		}
	}
}