<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('bidang_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->bidang_m->get();
		$this->template->load('halaman_template', 'bidang/halaman_bidang', $data);
	}

	public function detail($KdRek2){
        $this->load->model('bidang_m');
        $detail = $this->bidang_m->detail_data($KdRek2);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'bidang/detail_bidang', $data);
	}

	public function tambah_aksi(){
        $KdRek2 = $this->input->post('KdRek2');
		$Nama_Kelompok = $this->input->post('Nama_Kelompok');
		$KdRek1 = $this->input->post('KdRek1');

        $data = array(
            'KdRek2' => $KdRek2,
			'Nama_Kelompok' => $Nama_Kelompok,
			'KdRek1' => $KdRek1
            
		);
		$this->bidang_m->input_data($data, 'rek_asset2');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('bidang')."';</script>";
	}

	public function edit($KdRek2){
        $where = array('KdRek2' =>$KdRek2);
        $data['bidang'] = $this->bidang_m->edit_data($where,'rek_asset2')->result();
        $this->template->load('halaman_template', 'bidang/edit_bidang', $data);
	}
	
	public function update(){
        $KdRek2 = $this->input->post('KdRek2');
		$Nama_Kelompok = $this->input->post('Nama_Kelompok');
		$KdRek1 = $this->input->post('KdRek1');

        $data = array(
            'KdRek2' => $KdRek2,
			'Nama_Kelompok' => $Nama_Kelompok,
			'KdRek1' => $KdRek1
        );

        $where = array(
            'KdRek2' => $KdRek2
		);
		$this->bidang_m->update_data($where,$data,'rek_asset2');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('bidang')."';</script>";
	}
	
	public function hapus ($KdRek2){
        //$where = array ('KdRek1' => $KdRek1);
        $this->bidang_m->hapus_data($KdRek2);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('bidang')."';</script>";
	}
}