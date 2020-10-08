<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_aset_desa extends CI_Controller {


	public function index()
	{
        
        //menampilkan views
		$this->template->load('halaman_template', 'halaman_riwayat_aset_desa');
	}
}