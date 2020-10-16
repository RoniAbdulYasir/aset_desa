<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kelompok_m extends CI_Model {

    public function get(){

		$this->db->from('rek_asset4');
    $this->db->join('rek_asset3', 'rek_asset3.KdRek3 = rek_asset4.KdRek3');
    $query = $this->db->get();
		return $query->result() ;
        
    }

   
	
}
