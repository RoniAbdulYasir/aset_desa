<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {


	function __construct(){
                parent::__construct();
                check_not_login();
		$this->load->model(['desa_m', 'kecamatan_m']);
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->desa_m->get();
		$this->template->load('halaman_template', 'desa/halaman_desa', $data);
	}

	public function add(){
                $desa = new stdClass();
                $desa->Kd_Desa = null;
		$desa->Nama_Desa = null;
                $desa->Kd_Kec = null;
                
                $kecamatan = $this->kecamatan_m->get();
                $data = array(
                        'page' => 'add',
                        'row' => $desa,
                        'kecamatan' => $kecamatan,
                );
                $this->template->load('halaman_template', 'desa/desa_form', $data);
                
        }
        
        public function process(){
                $post = $this->input->post(null, TRUE);
                if(isset($_POST['add'])){
                        $this->desa_m->add($post);
                }elseif(isset($_POST['edit'])){
                        $this->desa_m->edit($post);
                }

                if($this->db->affected_rows() > 0){
                        echo "<script>alert('Data Berhasil Disimpan');</script>";
                        
                        }
                        echo "<script>window.location='".site_url('desa')."';</script>";
                
                
	}

	public function detail($Kd_Desa){
        $this->load->model('desa_m');
        $detail = $this->desa_m->detail_data($Kd_Desa);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'desa/detail_desa', $data);
	}

	public function edit($Kd_Desa){
                $query = $this->desa_m->get($Kd_Desa);
                if($query->num_rows() > 0) {
                        $desa = $query->row();
                        $kecamatan = $this->kecamatan_m->get();
                        $data = array(
                                'page' => 'edit',
                                'row' => $desa,
                                'kecamatan' => $kecamatan,
                        );
                $this->template->load('halaman_template', 'desa/desa_form', $data);
                } else{
                        echo "<script>alert('Data Tidak Ditemukan');";
                        echo "window.location='".site_url('desa')."';</script>";
                }
	}
	
	
	public function hapus ($Kd_Desa){
        $this->desa_m->hapus_data($Kd_Desa);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('desa')."';</script>";
	}
}