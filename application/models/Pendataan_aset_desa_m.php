<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_aset_desa_m extends CI_Model {

    public function get(){

        $this->db->from('Ta_DataAset');
        $this->db->join('ref_desa', 'ref_desa.Kd_Desa = Ta_DataAset.Kd_Desa');
        $this->db->join('ref_AsalAset', 'ref_AsalAset.Id_Asal_Aset = Ta_DataAset.Id_Asal_Aset');
        $this->db->join('ref_Kondisi', 'ref_Kondisi.Id_Kondisi = Ta_DataAset.Id_Kondisi');
        $this->db->join('ref_StatusAset', 'ref_StatusAset.Id_Status_Aset = Ta_DataAset.Id_Status_Aset');
        $this->db->join('rek_Asset5', 'rek_Asset5.KdRek5 = Ta_DataAset.KdRek5');
        $query = $this->db->get();
		return $query->result() ;
        
    }
   
	
}
