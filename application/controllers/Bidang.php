<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {


	public function index()
	{
        
        //menampilkan views
		$this->template->load('halaman_template', 'halaman_bidang');
	}
}