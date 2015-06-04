<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
	public function index(){
		
		$data	= array('title'=>'Login Administrator', 'isi'=>'admin/login_view');
		
		$this->load->view('admin/login_view',$data);
	}
}