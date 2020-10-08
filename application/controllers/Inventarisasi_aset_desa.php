<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventarisasi_aset_desa extends CI_Controller {


	public function index()
	{
        
        //menampilkan views
		$this->template->load('halaman_template', 'halaman_inventarisasi_aset_desa');
	}
}