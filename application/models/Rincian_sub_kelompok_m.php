<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian_sub_kelompok_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset5');
    $this->db->join('rek_asset4', 'rek_asset5.KdRek4 = rek_asset4.KdRek4');
    $query = $this->db->get();
		return $query->result() ;
        
    }

    public function input_data($data){
      return $this->db->insert('rek_asset4', $data);
    }

    public function detail_data($KdRek5 = NULL){
      //$query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
      $this->db->select('*');
      $this->db->from('rek_asset5');
      $this->db->join('rek_asset4','rek_asset5.KdRek4 = rek_asset4.KdRek4');
      $this->db->where('rek_asset5.KdRek5',$KdRek5);
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

    public function hapus_data($KdRek4){
      $this->db->where('KdRek4', $KdRek4);
      $this->db->delete('rek_asset4');
    }
   

	
}
