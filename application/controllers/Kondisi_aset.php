<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_aset extends CI_Controller {


	function __construct(){
        parent::__construct();
        check_not_login();
		$this->load->model('kondisi_aset_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kondisi_aset_m->get();
		$this->template->load('halaman_template', 'kondisi_aset/halaman_kondisi_aset', $data);
	}

	
}