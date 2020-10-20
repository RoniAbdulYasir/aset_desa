<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('kecamatan_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kecamatan_m->get();
		$this->template->load('halaman_template', 'kecamatan/halaman_kecamatan', $data);
	}

	public function tambah_aksi(){
        $Kd_Kec = $this->input->post('Kd_Kec');
        $Nama_Kecamatan = $this->input->post('Nama_Kecamatan');

        $data = array(
            'Kd_Kec' => $Kd_Kec,
            'Nama_Kecamatan' => $Nama_Kecamatan
            
        );

        $this->kecamatan_m->input_data($data, 'ref_kecamatan');
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
        $where = array('Kd_Kec' =>$Kd_Kec);
        $data['kecamatan'] = $this->kecamatan_m->edit_data($where,'ref_kecamatan')->result();
        $this->template->load('halaman_template', 'kecamatan/edit_kecamatan', $data);
	}
	
	public function update(){
        $Kd_Kec = $this->input->post('Kd_Kec');
        $Nama_Kecamatan = $this->input->post('Nama_Kecamatan');

        $data = array(
            'Kd_Kec' => $Kd_Kec,
            'Nama_Kecamatan' => $Nama_Kecamatan,
        );

        $where = array(
            'Kd_Kec' => $Kd_Kec
        );
        $this->kecamatan_m->update_data($where,$data,'ref_kecamatan');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('kecamatan')."';</script>";
	}
	
	public function hapus ($Kd_Kec){
        //$where = array ('KdRek1' => $KdRek1);
        $this->kecamatan_m->hapus_data($Kd_Kec);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('kecamatan')."';</script>";
	}
}