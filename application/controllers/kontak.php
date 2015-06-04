<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class kontak extends CI_Controller{
	public function index(){
		$data	= array('title'=>'Kontak Kami', 'isi'=>'home/kontak_view');
		
		$this->load->view('layout/wrapper',$data);
	}
}