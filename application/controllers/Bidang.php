<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('bidang_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->bidang_m->get();
		$this->template->load('halaman_template', 'halaman_bidang', $data);
	}
}