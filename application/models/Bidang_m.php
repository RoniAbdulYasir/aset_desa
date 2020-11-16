<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset2');
    $this->db->join('rek_asset1', 'rek_asset1.KdRek1 = rek_asset2.KdRek1_FK');
    $query = $this->db->get();
		return $query->result() ;
   
    }

    public function detail_data($KdRek2 = NULL){
      //$query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
      $this->db->select('*');
      $this->db->from('rek_asset2');
      $this->db->join('rek_asset1','rek_asset2.KdRek1_FK = rek_asset1.KdRek1');
      $this->db->where('rek_asset2.KdRek2',$KdRek2);
      $query = $this->db->get()->row();
      return $query;
    }

    public function input_data($data){
      return $this->db->insert('rek_asset2', $data);
    }

    public function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function hapus_data($KdRek1){
      $this->db->where('KdRek2', $KdRek1);
      $this->db->delete('rek_asset2');
    }


	
}
