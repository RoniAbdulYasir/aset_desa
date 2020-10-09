<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('kecamatan_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kecamatan_m->get();
		$this->template->load('halaman_template', 'halaman_kecamatan', $data);
	}
}