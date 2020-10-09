<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('rek_asset2'); 
		return $query->result() ;
        
    }

   
	
}
