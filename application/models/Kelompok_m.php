<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset3');
    $this->db->join('rek_asset2', 'rek_asset2.KdRek2 = rek_asset3.KdRek2');
    $query = $this->db->get();
		return $query->result() ;
        
    }

   
	
}
