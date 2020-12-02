<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_peralatandanmesin extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model(['laporan_peralatandanmesin_m', 'pendataan_aset_desa_m']);
	}

	public function index()
	{
        
		//menampilkan views
		$this->db->where('KdRek1',3);
		$this->db->where('Hapus',null);
		$data['query'] = $this->laporan_peralatandanmesin_m->get();
		$this->load->view('halaman_laporan_peralatandanmesin', $data);
	}
}