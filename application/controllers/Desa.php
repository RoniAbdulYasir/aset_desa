<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('desa_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->desa_m->get();
		$this->template->load('halaman_template', 'desa/halaman_desa', $data);
	}

	public function tambah_aksi(){
        $Kd_Desa = $this->input->post('Kd_Desa');
		$Nama_Desa = $this->input->post('Nama_Desa');
		$Kd_Kec = $this->input->post('Kd_Kec');
		//$Kecamatan= $this->kecamatan_m->get();

        $data = array(
            'Kd_Desa' => $Kd_Desa,
			'Nama_Desa' => $Nama_Desa,
			'Kd_Kec' => $Kd_Kec,
			//'Kecamatan' => $Kecamatan
            
		);
		$this->desa_m->input_data($data, 'ref_desa');
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
        $where = array('Kd_Desa' =>$Kd_Desa);
        $data['desa'] = $this->desa_m->edit_data($where,'ref_desa')->result();
        $this->template->load('halaman_template', 'desa/edit_desa', $data);
	}
	
	public function update(){
        $Kd_Desa = $this->input->post('Kd_Desa');
		$Nama_Desa = $this->input->post('Nama_Desa');
		$Kd_Kec = $this->input->post('Kd_Kec');

        $data = array(
            'Kd_Desa' => $Kd_Desa,
			'Nama_Desa' => $Nama_Desa,
			'Kd_Kec' => $Kd_Kec
        );

        $where = array(
            'Kd_Desa' => $Kd_Desa
		);
		$this->desa_m->update_data($where,$data,'ref_desa');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('desa')."';</script>";
	}

	public function hapus ($Kd_Desa){
        //$where = array ('KdRek1' => $KdRek1);
        $this->desa_m->hapus_data($Kd_Desa);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('desa')."';</script>";
	}
}