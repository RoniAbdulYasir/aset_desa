<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kelompok extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('sub_kelompok_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->sub_kelompok_m->get();
		$this->template->load('halaman_template', 'sub_kelompok/halaman_sub_kelompok', $data);
	}

}