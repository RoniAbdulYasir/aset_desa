<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asal_aset_m extends CI_Model {

    public function get($Id_AsalAset = null){
      $this->db->from('ref_asalaset');
      if($Id_AsalAset != null){
        $this->db->where('Id_AsalAset', $Id_AsalAset);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    

   
	
}
