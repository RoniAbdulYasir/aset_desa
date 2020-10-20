<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('ref_kecamatan'); 
		return $query->result() ;
        
    }

    public function input_data($data){
      return $this->db->insert('ref_kecamatan', $data);
    }

    public function detail_data($Kd_Kec = NULL){
      $query = $this->db->get_where('ref_kecamatan', array('Kd_Kec' => $Kd_Kec))->row();
      return $query;
    }

    public function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function hapus_data($Kd_Kec){
      $this->db->where('Kd_Kec', $Kd_Kec);
      $this->db->delete('ref_kecamatan');
    }

   
	
}
