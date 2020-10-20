<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('kelompok_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->kelompok_m->get();
		$this->template->load('halaman_template', 'kelompok/halaman_kelompok', $data);
	}

	public function tambah_aksi(){
        $KdRek3 = $this->input->post('KdRek3');
		$Nama_Jenis = $this->input->post('Nama_Jenis');
		$KdRek2 = $this->input->post('KdRek2');

        $data = array(
            'KdRek3' => $KdRek3,
			'Nama_Jenis' => $Nama_Jenis,
			'KdRek2' => $KdRek2
            
		);
		$this->kelompok_m->input_data($data, 'rek_asset3');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('kelompok')."';</script>";
	}

	public function detail($KdRek3){
        $this->load->model('kelompok_m');
        $detail = $this->kelompok_m->detail_data($KdRek3);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'kelompok/detail_kelompok', $data);
	}

	public function edit($KdRek3){
        $where = array('KdRek3' =>$KdRek3);
        $data['kelompok'] = $this->kelompok_m->edit_data($where,'rek_asset3')->result();
        $this->template->load('halaman_template', 'kelompok/edit_kelompok', $data);
	}
	
	public function update(){
        $KdRek3 = $this->input->post('KdRek3');
		$Nama_Jenis = $this->input->post('Nama_Jenis');
		$KdRek2 = $this->input->post('KdRek2');

        $data = array(
            'KdRek3' => $KdRek3,
			'Nama_Jenis' => $Nama_Jenis,
			'KdRek2' => $KdRek2
        );

        $where = array(
            'KdRek3' => $KdRek3
		);
		$this->kelompok_m->update_data($where,$data,'rek_asset3');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('kelompok')."';</script>";
	}

	public function hapus ($KdRek3){
        //$where = array ('KdRek1' => $KdRek1);
        $this->kelompok_m->hapus_data($KdRek3);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('kelompok')."';</script>";
	}
}