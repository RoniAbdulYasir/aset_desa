<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('desa_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->desa_m->get();
		$this->template->load('halaman_template', 'halaman_desa', $data);
	}
}