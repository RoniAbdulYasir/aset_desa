<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_desa extends CI_Controller {


	function __construct(){
                parent::__construct();
                check_not_login();
		$this->load->model(['peraturan_desa_m', 'desa_m']);
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->peraturan_desa_m->get();
		$this->template->load('halaman_template', 'peraturan_desa/halaman_peraturan_desa', $data);
        }
        
        public function add(){
                $peraturan_desa = new stdClass();
                $peraturan_desa->Id_Ref_Perdes = null;
				$peraturan_desa->Kd_Desa_FK = $this->session->userdata('Kd_Desa');
                $peraturan_desa->No_Perdes = null;
                $peraturan_desa->Tgl_Perdes = null;
                $peraturan_desa->Uraian_Perdes = null;
                $peraturan_desa->Status = null;
                
                $desa = $this->desa_m->get();
                $data = array(
                        'page' => 'add',
                        'row' => $peraturan_desa,
                        'desa' => $desa,
                );
                $this->template->load('halaman_template', 'peraturan_desa/peraturan_desa_form', $data);
                
        }

        public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
				$this->peraturan_desa_m->add($post);
		}elseif(isset($_POST['edit'])){
				$this->peraturan_desa_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
				echo "<script>alert('Data Berhasil Disimpan');</script>";
				
				}
				echo "<script>window.location='".site_url('peraturan_desa')."';</script>";
		
		
	}

	
}