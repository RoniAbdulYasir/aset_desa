<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_m extends CI_Model {

    public function get($Kd_Desa = null){
      $this->db->from('ref_desa');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
      if($Kd_Desa != null){
        $this->db->where('Kd_Desa', $Kd_Desa);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    public function add($post){
      $params = [
        'Kd_Desa' => $post['Kd_Desa'],
        'Nama_Desa' => $post['Nama_Desa'],
        'Kd_Kec' => $post['kecamatan'],
        'created' => date('Y-m-d H:i:s')
      ];
      $this->db->insert('ref_desa', $params);
    }

    public function edit($post){
      $params = [
        'Kd_Desa' => $post['Kd_Desa'],
        'Nama_Desa' => $post['Nama_Desa'],
        'Kd_Kec' => $post['kecamatan'],
        'updated' => date('Y-m-d H:i:s')
      ];
      $this->db->where('Kd_Desa', $post['Kd_Desa']);
      $this->db->update('ref_desa', $params);
    }

    public function detail_data($Kd_Desa = NULL){
      //$query = $this->db->get_where('ref_desa', array('Kd_Desa' => $Kd_Desa))->row();
      $this->db->from('ref_desa');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
      $this->db->where(array('Kd_Desa' => $Kd_Desa));
      $query =  $this->db->get(); 
      return $query->row();
    }


    public function hapus_data($Kd_Desa){
      $this->db->where('Kd_Desa', $Kd_Desa);
      $this->db->delete('ref_desa');
    }

   
	
}
