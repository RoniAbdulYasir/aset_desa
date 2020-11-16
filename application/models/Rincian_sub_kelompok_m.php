<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian_sub_kelompok_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset5');
    $this->db->join('rek_asset4', 'rek_asset5.KdRek4_FK = rek_asset4.KdRek4');
    $this->db->join('rek_asset3', 'rek_asset4.KdRek3_FK = rek_asset3.KdRek3');
    $this->db->join('rek_asset2', 'rek_asset3.KdRek2_FK = rek_asset2.KdRek2');
    $this->db->join('rek_asset1', 'rek_asset2.KdRek1_FK = rek_asset1.KdRek1');
    $query = $this->db->get();
		return $query->result() ;
        
    }

    public function input_data($data){
      return $this->db->insert('rek_asset5', $data);
    }

    public function detail_data($KdRek5 = NULL){
      //$query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
      $this->db->select('*');
      $this->db->from('rek_asset5');
      $this->db->join('rek_asset4','rek_asset5.KdRek4_FK = rek_asset4.KdRek4');
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

    public function hapus_data($KdRek5){
      $this->db->where('KdRek5', $KdRek5);
      $this->db->delete('rek_asset5');
    }
   

	
}
