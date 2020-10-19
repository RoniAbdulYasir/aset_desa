<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('golongan_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->golongan_m->get();
		$this->template->load('halaman_template', 'golongan/halaman_golongan', $data);
	}

	public function detail($KdRek1){
        $this->load->model('golongan_m');
        $detail = $this->golongan_m->detail_data($KdRek1);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'golongan/detail_golongan', $data);
	}
	
	public function tambah_aksi(){
        $KdRek1 = $this->input->post('KdRek1');
        $Nama_Akun = $this->input->post('Nama_Akun');

        $data = array(
            'KdRek1' => $KdRek1,
            'Nama_Akun' => $Nama_Akun
            
        );

        $this->golongan_m->input_data($data, 'rek_asset1');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('golongan')."';</script>";
	}
	
	public function hapus ($KdRek1){
        //$where = array ('KdRek1' => $KdRek1);
        $this->golongan_m->hapus_data($KdRek1);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('golongan')."';</script>";
	}
	
	public function edit($KdRek1){
        $where = array('KdRek1' =>$KdRek1);
        $data['golongan'] = $this->golongan_m->edit_data($where,'rek_asset1')->result();
        $this->template->load('halaman_template', 'golongan/edit_golongan', $data);
	}
	
	public function update(){
        $KdRek1 = $this->input->post('KdRek1');
        $Nama_Akun = $this->input->post('Nama_Akun');

        $data = array(
            'KdRek1' => $KdRek1,
            'Nama_Akun' => $Nama_Akun,
        );

        $where = array(
            'KdRek1' => $KdRek1
        );
        $this->golongan_m->update_data($where,$data,'rek_asset1');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('golongan')."';</script>";
    }
}
