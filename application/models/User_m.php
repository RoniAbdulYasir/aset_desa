<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post){

      $this->db->select('*');
      $this->db->from('ta_iduser');
      $this->db->join('ref_desa', 'ref_desa.Kd_Desa = ta_iduser.Kd_Desa');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec= ref_desa.Kd_Kec');
      $this->db->where('Username', $post['Username']);
      $this->db->where('Password', $post['Password']);
    $query = $this->db->get();
		return $query;
   
    }

    public function get(){

      $this->db->select('*');
      $this->db->from('ta_iduser');
      $this->db->join('ref_desa', 'ref_desa.Kd_Desa = ta_iduser.Kd_Desa');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec= ref_desa.Kd_Kec');
      $query = $this->db->get();
		  return $query->result() ;
   
    }

    public function getid($id = null){
      $this->db->from('ta_iduser');
      $this->db->join('ref_desa', 'ref_desa.Kd_Desa = ta_iduser.Kd_Desa');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec= ref_desa.Kd_Kec');
      if($id != null){
          $this->db->where('IDUser', $id);
      }
      $query = $this->db->get();
      return $query;
  }
    

    public function input_data($data){
      return $this->db->insert('ta_iduser', $data);
  }

  public function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}

public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
}

    

	
}
