<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kelompok extends CI_Controller {


	public function index()
	{
        
        //menampilkan views-
		$this->template->load('halaman_template', 'halaman_sub_kelompok');
	}
}