<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_aset extends CI_Controller {


	function __construct(){
        parent::__construct();
        check_not_login();
		$this->load->model('status_aset_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->status_aset_m->get();
		$this->template->load('halaman_template', 'status_aset/halaman_status_aset', $data);
	}

	
}