<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kelompok_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('rek_asset4'); 
		return $query->result() ;
        
    }

   
	
}
