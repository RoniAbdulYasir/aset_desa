<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('golongan_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['row'] = $this->golongan_m->get();
		$this->template->load('halaman_template', 'halaman_golongan', $data);
	}
}
