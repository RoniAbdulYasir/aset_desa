<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian_sub_kelompok extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('rincian_sub_kelompok_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->rincian_sub_kelompok_m->get();
		$this->template->load('halaman_template', 'rincian_sub_kelompok/halaman_rincian_sub_kelompok', $data);
	}

	public function tambah_aksi(){
        $KdRek5 = $this->input->post('KdRek5');
		$Nama_Rincian = $this->input->post('Nama_Rincian');
		$KdRek4_FK = $this->input->post('KdRek4_FK');

        $data = array(
            'KdRek5' => $KdRek5,
			'Nama_Rincian' => $Nama_Rincian,
			'KdRek4_FK' => $KdRek4_FK
            
		);
		$this->rincian_sub_kelompok_m->input_data($data, 'rek_asset5');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('rincian_sub_kelompok')."';</script>";
	}

	public function detail($KdRek5){
        $this->load->model('rincian_sub_kelompok_m');
        $detail = $this->rincian_sub_kelompok_m->detail_data($KdRek5);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'rincian_sub_kelompok/detail_rincian_sub_kelompok', $data);
	}

	public function edit($KdRek5){
        $where = array('KdRek5' =>$KdRek5);
        $data['rincian_sub_kelompok'] = $this->rincian_sub_kelompok_m->edit_data($where,'rek_asset5')->result();
        $this->template->load('halaman_template', 'rincian_sub_kelompok/edit_rincian_sub_kelompok', $data);
	}
	
	public function update(){
        $KdRek5 = $this->input->post('KdRek5');
		$Nama_Rincian = $this->input->post('Nama_Rincian');
		$KdRek4_FK = $this->input->post('KdRek4_FK');

        $data = array(
            'KdRek5' => $KdRek5,
			'Nama_Rincian' => $Nama_Rincian,
			'KdRek4_FK' => $KdRek4_FK
        );

        $where = array(
            'KdRek5' => $KdRek5
		);
		$this->rincian_sub_kelompok_m->update_data($where,$data,'rek_asset5');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('rincian_sub_kelompok')."';</script>";
	}

	public function hapus ($KdRek5){
        //$where = array ('KdRek1' => $KdRek1);
        $this->rincian_sub_kelompok_m->hapus_data($KdRek5);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('rincian_sub_kelompok')."';</script>";
	}


}