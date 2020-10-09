<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('ref_kecamatan'); 
		return $query->result() ;
        
    }

   
	
}
