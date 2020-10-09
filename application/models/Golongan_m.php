<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_m extends CI_Model {

    public function get(){

		$query =  $this->db->get('rek_asset1'); 
		return $query->result() ;
        
    }

   
	
}
