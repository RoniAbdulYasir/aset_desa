<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_aset_desa_m extends CI_Model {

    public function get($IdTran = null){

        $Level = $this->session->userdata('Level'); // dapatkan Level user yg login
        $Kd_Desa = $this->session->userdata('Kd_Desa'); // dapatkan Desa user yg login
        $Kd_Kec = $this->session->userdata('Kd_Kec'); // dapatkan Kecamatan user yg login
        $this->db->from('Ta_DataAset');
        $this->db->join('ref_desa', 'ref_desa.Kd_Desa = Ta_DataAset.Kd_Desa_FK');
        $this->db->join('ref_AsalAset', 'ref_AsalAset.Id_AsalAset = Ta_DataAset.Id_AsalAset_FK');
        $this->db->join('ref_Kondisi', 'ref_Kondisi.Id_Kondisi = Ta_DataAset.Id_Kondisi_FK');
        $this->db->join('ref_StatusAset', 'ref_StatusAset.Id_StatusAset = Ta_DataAset.Id_StatusAset_FK');
        $this->db->join('ref_Perdes', 'ref_Perdes.Id_Ref_Perdes = Ta_DataAset.Id_Ref_Perdes_FK');
        $this->db->join('rek_Asset5', 'rek_Asset5.KdRek5 = Ta_DataAset.KdRek5_FK');
        $this->db->join('rek_Asset4', 'rek_Asset4.KdRek4 = rek_Asset5.KdRek4_FK');
        $this->db->join('rek_Asset3', 'rek_Asset3.KdRek3 = rek_Asset4.KdRek3_FK');
        $this->db->join('rek_Asset2', 'rek_Asset2.KdRek2 = rek_Asset3.KdRek2_FK');
        $this->db->join('rek_Asset1', 'rek_Asset1.KdRek1 = rek_Asset2.KdRek1_FK');
        if($Level==2){
          $this->db->where('Kd_Kec',$Kd_Kec);
        }else if ($Level==3){
          $this->db->where('Kd_Desa',$Kd_Desa);
        }

        if($IdTran != null){
          $this->db->where('IdTran', $IdTran);
        }
        $query = $this->db->get();
	    	return $query;
        
    }

      public function add(){
        $params = [
          'Tahun' => $this->input->post('Tahun'),
          'Kd_Desa_FK' => $this->input->post('Kd_Desa_FK'),
          'KdRek5_FK' => $this->input->post('KdRek5_FK'),
          'Id_AsalAset_FK' => $this->input->post('Id_AsalAset_FK'),
          'Id_Kondisi_FK' => $this->input->post('Id_Kondisi_FK'),
          'Id_StatusAset_FK' => $this->input->post('Id_StatusAset_FK'),
          'Id_Ref_Perdes_FK' => $this->input->post('Id_Ref_Perdes_FK'),
          'Identitas_Barang1' => $this->input->post('Identitas_Barang1'),
          'Identitas_Barang2' => $this->input->post('Identitas_Barang2'),
          'Identitas_Barang3' => $this->input->post('Identitas_Barang3'),
          'Kuantitas' => $this->input->post('Kuantitas'),
          'Hrg_Satuan' => $this->input->post('Hrg_Satuan'),
          'Nilai' => $this->input->post('Nilai'),
          'Satuan' => $this->input->post('Satuan'),
          'Tgl_Input' => date('Y-m-d H:i:s'),
          'User_Input' => $this->session->userdata('Nama'),
          
        ];
        $this->db->insert('ta_dataaset', $params);
      }

      public function edit($post){
        $params = [
          'Tahun' => $post['Tahun'],
          'Kd_Desa_FK' => $post['Kd_Desa_FK'],
          'KdRek5_FK' => $post['KdRek5_FK'],
          'Id_AsalAset_FK' => $post['Id_AsalAset_FK'],
          'Id_Kondisi_FK' => $post['Id_Kondisi_FK'],
          'Id_StatusAset_FK' => $post['Id_StatusAset_FK'],
          'Id_Ref_Perdes_FK' => $post['Id_Ref_Perdes_FK'],
          'Identitas_Barang1' => $post['Identitas_Barang1'],
          'Identitas_Barang2' => $post['Identitas_Barang2'],
          'Identitas_Barang3' => $post['Identitas_Barang3'],
          'Kuantitas' => $post['Kuantitas'],
          'Hrg_Satuan' => $post['Hrg_Satuan'],
          'Nilai' => $post['Nilai'],
          'Satuan' => $post['Satuan'],
          'Tgl_Update' => date('Y-m-d H:i:s'),
          'User_Update' => $this->session->userdata('Nama'),
        ];
        $this->db->where('IdTran', $post['IdTran']);
        $this->db->update('ta_dataaset', $params);
      }

      public function detail_data($IdTran = NULL){
        $this->db->from('ta_dataaset');
        $this->db->join('ref_desa', 'ref_desa.Kd_Desa = Ta_DataAset.Kd_Desa_FK');
        $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
        $this->db->join('ref_AsalAset', 'ref_AsalAset.Id_AsalAset = Ta_DataAset.Id_AsalAset_FK');
        $this->db->join('ref_Kondisi', 'ref_Kondisi.Id_Kondisi = Ta_DataAset.Id_Kondisi_FK');
        $this->db->join('ref_StatusAset', 'ref_StatusAset.Id_StatusAset = Ta_DataAset.Id_StatusAset_FK');
        $this->db->join('ref_Perdes', 'ref_Perdes.Id_Ref_Perdes = Ta_DataAset.Id_Ref_Perdes_FK');
        $this->db->join('rek_Asset5', 'rek_Asset5.KdRek5 = Ta_DataAset.KdRek5_FK');
        $this->db->join('rek_Asset4', 'rek_Asset4.KdRek4 = rek_Asset5.KdRek4_FK');
        $this->db->join('rek_Asset3', 'rek_Asset3.KdRek3 = rek_Asset4.KdRek3_FK');
        $this->db->join('rek_Asset2', 'rek_Asset2.KdRek2 = rek_Asset3.KdRek2_FK');
        $this->db->join('rek_Asset1', 'rek_Asset1.KdRek1 = rek_Asset2.KdRek1_FK');
        $this->db->where(array('IdTran' => $IdTran));
        $query =  $this->db->get(); 
        return $query->row();
      }

      public function hapus_data($IdTran){
        $params = [
          'Hapus' => ('1'),
          'Tgl_Hapus' => date('Y-m-d H:i:s'),
          'User_Hapus' => $this->session->userdata('Nama'),
        ];
        $this->db->where('IdTran', $IdTran);
         $this->db->update('ta_dataaset', $params);
      }

      
   
	
}
