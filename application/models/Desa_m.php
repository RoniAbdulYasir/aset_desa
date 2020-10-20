<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_m extends CI_Model {

    public function get(){

        $this->db->from('ref_desa');
        $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
        $query =   $this->db->get();
		return $query->result() ;
        
    }

    public function input_data($data){
        return $this->db->insert('ref_desa', $data);
    }

    public function detail_data($Kd_Desa = NULL){
        //$query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
        $this->db->select('*');
        $this->db->from('ref_desa');
        $this->db->join('ref_kecamatan','ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
        $this->db->where('ref_desa.Kd_Desa',$Kd_Desa);
        $query = $this->db->get()->row();
        return $query;
    }
  
    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($Kd_Desa){
        $this->db->where('Kd_Desa', $Kd_Desa);
        $this->db->delete('ref_desa');
      }

   
	
}
