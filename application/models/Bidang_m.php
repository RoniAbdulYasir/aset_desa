<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset2');
    $this->db->join('rek_asset1', 'rek_asset1.KdRek1 = rek_asset2.KdRek1');
    $query = $this->db->get();
		return $query->result() ;
   
    }

    public function detail_data($KdRek2 = NULL){
      $query = $this->db->get_where('rek_asset2', array('KdRek2' => $KdRek2))->row();
      //$this->db->select('*');
      //$this->db->from('rek_asset2');
      //$this->db->join('rek_asset1','rek_asset2.KdRek1 = rek_asset1.KdRek1');
      //$this->db->where('rek_asset2.KdRek2',$KdRek2);
      //$query = $this->db->get_where();
      return $query;
    }


	
}
