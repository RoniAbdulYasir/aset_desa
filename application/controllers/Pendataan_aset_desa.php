<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_aset_desa extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('pendataan_aset_desa_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->pendataan_aset_desa_m->get();
		$this->template->load('halaman_template', 'pendataan_aset_desa/halaman_pendataan_aset_desa', $data);
	}
}