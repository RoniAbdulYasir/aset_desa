<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('rek_asset1'); 
		return $query->result() ;
        
    }

    public function detail_data($KdRek1 = NULL){
      $query = $this->db->get_where('rek_asset1', array('KdRek1' => $KdRek1))->row();
      return $query;
    }
      
    public function input_data($data){
      return $this->db->insert('rek_asset1', $data);
    }

    public function hapus_data($KdRek1){
      $this->db->where('KdRek1', $KdRek1);
      $this->db->delete('rek_asset1');
    }

    public function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }
   
	
}
