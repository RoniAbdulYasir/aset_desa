<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('ref_desa'); 
		return $query->result() ;
        
    }

   
	
}
