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
		$this->template->load('halaman_template', 'bidang/halaman_bidang', $data);
	}

	public function detail($KdRek2){
        $this->load->model('bidang_m');
        $detail = $this->bidang_m->detail_data($KdRek2);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'bidang/detail_bidang', $data);
	}
}