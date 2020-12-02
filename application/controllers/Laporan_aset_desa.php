<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_aset_desa extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model(['laporan_aset_desa_m', 'pendataan_aset_desa_m']);
	}

	public function index()
	{
        
		//menampilkan views
		$this->db->where('KdRek1',2);
		$this->db->where('Hapus',null);
		$data['query'] = $this->laporan_aset_desa_m->get();
		$this->load->view('halaman_laporan_aset_desa', $data);
	}
}