<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_aset_desa extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model(['pendataan_aset_desa_m', 'desa_m', 'rincian_sub_kelompok_m', 'asal_aset_m', 'kondisi_aset_m', 'status_aset_m']);
	}

	public function index()
	{
        
		//menampilkan views
		$this->db->where('KdRek1',2);
		$data['query1'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',3);
		$data['query2'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',4);
		$data['query3'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',5);
		$data['query4'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',6);
		$data['query5'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',7);
		$data['query6'] = $this->pendataan_aset_desa_m->get();
		$this->db->where('KdRek1',8);
		$data['query7'] = $this->pendataan_aset_desa_m->get();
		$this->template->load('halaman_template', 'pendataan_aset_desa/halaman_pendataan_aset_desa', $data);
	}
	public function add($menu){		
		$pendataan = new stdClass();
		$pendataan->Tahun = null;
		$pendataan->Kd_Desa_FK = $this->session->userdata('Kd_Desa');
		$pendataan->KdRek5_FK = null;
		$pendataan->Id_AsalAset_FK = null;
		$pendataan->Id_Kondisi_FK = null;
		$pendataan->Id_StatusAset_FK = null;
		$pendataan->Identitas_Barang1 = null;
		$pendataan->Identitas_Barang2 = null;
		$pendataan->Identitas_Barang3 = null;
		$pendataan->Kuantitas = null;
		$pendataan->Hrg_Satuan = null;
		$pendataan->Nilai = null;
		$pendataan->Satuan = null;
		
		$desa = $this->desa_m->get();
		if($menu=='tanah'){
			$this->db->where('KdRek1',2);
		}else if($menu=='peralatandanmesin'){
			$this->db->where('KdRek1',3);
		}else if($menu=='gedungdanbangunan'){
			$this->db->where('KdRek1',4);
		}else if($menu=='jalanirigasidanjaringan'){
			$this->db->where('KdRek1',5);
		}else if($menu=='asettetaplainnya'){
			$this->db->where('KdRek1',6);
		}else if($menu=='konstruksidalampekerjaan'){
			$this->db->where('KdRek1',7);
		}else if($menu=='asettidakberwujud'){
			$this->db->where('KdRek1',8);
		}
		$rincian_sub_kelompok = $this->rincian_sub_kelompok_m->get();
		$asal_aset = $this->asal_aset_m->get();
		$kondisi = $this->kondisi_aset_m->get();
		$statusaset = $this->status_aset_m->get();
		
		$data = array(
				'page' => 'add',
				'row' => $pendataan,
				'desa' => $desa,
				'rincian_sub_kelompok' => $rincian_sub_kelompok,
				'asal_aset' => $asal_aset,
				'kondisi' => $kondisi,
				'statusaset' => $statusaset,
		);
		
		$this->template->load('halaman_template', 'pendataan_aset_desa/pendataan_aset_desa_form', $data);
		
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
				$this->pendataan_aset_desa_m->add($post);
		}elseif(isset($_POST['edit'])){
				$this->pendataan_aset_desa_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
				echo "<script>alert('Data Berhasil Disimpan');</script>";
				
				}
				echo "<script>window.location='".site_url('pendataan_aset_desa')."';</script>";
		
		
	}

	public function edit($IdTran){
		$query = $this->pendataan_aset_desa_m->get($IdTran);
		if($query->num_rows() > 0) {
				$pendataan = $query->row();
				$rincian_sub_kelompok = $this->rincian_sub_kelompok_m->get();
				$asal_aset = $this->asal_aset_m->get();
				$kondisi = $this->kondisi_aset_m->get();
				$statusaset = $this->status_aset_m->get();
				$data = array(
						'page' => 'edit',
						'row' => $pendataan,
						'rincian_sub_kelompok' => $rincian_sub_kelompok,
						'asal_aset' => $asal_aset,
						'kondisi' => $kondisi,
						'statusaset' => $statusaset,
				);
		$this->template->load('halaman_template', 'pendataan_aset_desa/pendataan_aset_desa_form', $data);
		} else{
				echo "<script>alert('Data Tidak Ditemukan');";
				echo "window.location='".site_url('pendataan_aset_desa')."';</script>";
		}
}

	
}