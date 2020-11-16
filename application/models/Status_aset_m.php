<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_aset_m extends CI_Model {

    public function get($Id_StatusAset = null){
      $this->db->from('ref_statusaset');
      if($Id_StatusAset != null){
        $this->db->where('Id_StatusAset', $Id_StatusAset);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    

   
	
}
