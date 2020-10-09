<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('kelompok_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kelompok_m->get();
		$this->template->load('halaman_template', 'halaman_kelompok', $data);
	}
}