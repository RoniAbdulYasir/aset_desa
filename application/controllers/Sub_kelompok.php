<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kelompok extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('sub_kelompok_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->sub_kelompok_m->get();
		$this->template->load('halaman_template', 'sub_kelompok/halaman_sub_kelompok', $data);
	}

	public function tambah_aksi(){
        $KdRek4 = $this->input->post('KdRek4');
		$Nama_Obyek = $this->input->post('Nama_Obyek');
		$KdRek3 = $this->input->post('KdRek3');

        $data = array(
            'KdRek4' => $KdRek4,
			'Nama_Obyek' => $Nama_Obyek,
			'KdRek3' => $KdRek3
            
		);
		$this->sub_kelompok_m->input_data($data, 'rek_asset4');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('sub_kelompok')."';</script>";
	}

	public function detail($KdRek4){
        $this->load->model('sub_kelompok_m');
        $detail = $this->sub_kelompok_m->detail_data($KdRek4);
        $data['detail'] = $detail;
        $this->template->load('halaman_template', 'sub_kelompok/detail_sub_kelompok', $data);
	}

	public function edit($KdRek4){
        $where = array('KdRek4' =>$KdRek4);
        $data['subkelompok'] = $this->sub_kelompok_m->edit_data($where,'rek_asset4')->result();
        $this->template->load('halaman_template', 'sub_kelompok/edit_sub_kelompok', $data);
	}
	
	public function update(){
        $KdRek4 = $this->input->post('KdRek4');
		$Nama_Obyek = $this->input->post('Nama_Obyek');
		$KdRek3 = $this->input->post('KdRek3');

        $data = array(
            'KdRek4' => $KdRek4,
			'Nama_Obyek' => $Nama_Obyek,
			'KdRek3' => $KdRek3
        );

        $where = array(
            'KdRek4' => $KdRek4
		);
		$this->sub_kelompok_m->update_data($where,$data,'rek_asset4');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('sub_kelompok')."';</script>";
	}

	public function hapus ($KdRek4){
        //$where = array ('KdRek1' => $KdRek1);
        $this->sub_kelompok_m->hapus_data($KdRek4);
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Dihapus');</script>";
                
                }
                echo "<script>window.location='".site_url('sub_kelompok')."';</script>";
	}


}