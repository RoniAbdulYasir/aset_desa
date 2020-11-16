<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset3');
    $this->db->join('rek_asset2', 'rek_asset2.KdRek2 = rek_asset3.KdRek2_FK');
    $query = $this->db->get();
		return $query->result() ;
        
    }

    public function input_data($data){
      return $this->db->insert('rek_asset3', $data);
    }

    public function detail_data($KdRek3 = NULL){
      //$query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
      $this->db->select('*');
      $this->db->from('rek_asset3');
      $this->db->join('rek_asset2','rek_asset2.KdRek2 = rek_asset3.KdRek2_FK');
      $this->db->where('rek_asset3.KdRek3',$KdRek3);
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

    public function hapus_data($KdRek3){
      $this->db->where('KdRek3', $KdRek3);
      $this->db->delete('rek_asset3');
    }
	
}
