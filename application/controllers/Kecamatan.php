<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {


	function __construct(){
                parent::__construct();
                check_not_login();
		$this->load->model('kecamatan_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kecamatan_m->get();
		$this->template->load('halaman_template', 'kecamatan/halaman_kecamatan', $data);
	}

	public function add(){
                $kecamatan = new stdClass();
                $kecamatan->Kd_Kec = null;
                $kecamatan->Nama_Kecamatan = null;
                $data = array(
                        'page' => 'add',
                        'row' => $kecamatan
                );
                $this->template->load('halaman_template', 'kecamatan/kecamatan_form', $data);
                
        }
        
        public function process(){
                $post = $this->input->post(null, TRUE);
                if(isset($_POST['add'])){
                        $this->kecamatan_m->add($post);
                }elseif(isset($_POST['edit'])){
                        $this->kecamatan_m->edit($post);
                }

                if($this->db->affected_rows() > 0){
                        echo "<script>alert('Data Berhasil Disimpan');</script>";
                        
                        }
                        echo "<script>window.location='".site_url('kecamatan')."';</script>";
                
                
	}

	public function detail($Kd_Kec){
        $this->load->model('kecamatan_m');
        $detail = $this->kecamatan_m->detail_data($Kd_Kec);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'kecamatan/detail_kecamatan', $data);
	}

	public function edit($Kd_Kec){
                $query = $this->kecamatan_m->get($Kd_Kec);
                if($query->num_rows() > 0) {
                        $kecamatan = $query->row();
                        $data = array(
                                'page' => 'edit',
                                'row' => $kecamatan
                        );
                        $this->template->load('halaman_template', 'kecamatan/kecamatan_form', $data);
                } else{
                        echo "<script>alert('Data Tidak Ditemukan');";
                        echo "window.location='".site_url('kecamatan')."';</script>";
                }
	}
	
	
	public function hapus ($Kd_Kec){
        $this->kecamatan_m->hapus_data($Kd_Kec);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('kecamatan')."';</script>";
	}
}