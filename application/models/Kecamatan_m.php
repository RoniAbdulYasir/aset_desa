<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_m extends CI_Model {

    public function get($Kd_Kec = null){
      $this->db->from('ref_kecamatan');
      if($Kd_Kec != null){
        $this->db->where('Kd_Kec', $Kd_Kec);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    public function add($post){
      $params = [
        'Kd_Kec' => $post['Kd_Kec'],
        'Nama_Kecamatan' => $post['Nama_Kecamatan'],
      ];
      $this->db->insert('ref_kecamatan', $params);
    }

    public function edit($post){
      $params = [
        'Kd_Kec' => $post['Kd_Kec'],
        'Nama_Kecamatan' => $post['Nama_Kecamatan'],
        'updated' => date('Y-m-d H:i:s')
      ];
      $this->db->where('Kd_Kec', $post['Kd_Kec']);
      $this->db->update('ref_kecamatan', $params);
    }

    public function detail_data($Kd_Kec = NULL){
      $query = $this->db->get_where('ref_kecamatan', array('Kd_Kec' => $Kd_Kec))->row();
      return $query;
    }


    public function hapus_data($Kd_Kec){
      $this->db->where('Kd_Kec', $Kd_Kec);
      $this->db->delete('ref_kecamatan');
    }

   
	
}
