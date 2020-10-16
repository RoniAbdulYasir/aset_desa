<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_m extends CI_Model {

    public function get(){

        $this->db->from('ref_desa');
        $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
        $query =   $this->db->get();
		return $query->result() ;
        
    }

   
	
}
