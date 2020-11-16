<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asal_aset extends CI_Controller {


	function __construct(){
        parent::__construct();
        check_not_login();
		$this->load->model('asal_aset_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->asal_aset_m->get();
		$this->template->load('halaman_template', 'asal_aset/halaman_asal_aset', $data);
	}

	
}