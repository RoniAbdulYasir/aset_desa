<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_aset_m extends CI_Model {

    public function get($Id_Kondisi = null){
      $this->db->from('ref_kondisi');
      if($Id_Kondisi != null){
        $this->db->where('Id_Kondisi', $Id_Kondisi);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    

   
	
}
