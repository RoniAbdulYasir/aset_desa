<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('rek_asset3'); 
		return $query->result() ;
        
    }

   
	
}
