<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_aset_desa_m extends CI_Model {

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
      
   
	
}
