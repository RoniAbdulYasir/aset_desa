<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_desa_m extends CI_Model {

    public function get($Id_Ref_Perdes = null){
      $Kd_Desa = $this->session->userdata('Kd_Desa'); // dapatkan Desa user yg login
      $Kd_Kec = $this->session->userdata('Kd_Kec'); // dapatkan Kecamatan user yg login
      $Level = $this->session->userdata('Level'); // dapatkan Level user yg login
      $this->db->from('ref_perdes');
      $this->db->join('ref_desa', 'ref_desa.Kd_Desa = ref_perdes.Kd_Desa_FK');
      $this->db->join('ref_kecamatan', 'ref_kecamatan.Kd_Kec = ref_desa.Kd_Kec');
      if($Level==2){
        $this->db->where('Kd_Kec',$Kd_Kec);
      }else if ($Level==3){
        $this->db->where('Kd_Desa',$Kd_Desa);
      }
      if($Id_Ref_Perdes != null){
        $this->db->where('Id_Ref_Perdes', $Id_Ref_Perdes);
      }
		$query =  $this->db->get(); 
		return $query;
        
    }

    public function add(){
      $params = [
        'Kd_Desa_FK' => $this->input->post('Kd_Desa_FK'),
        'No_Perdes' => $this->input->post('No_Perdes'),
        'Tgl_Perdes' => $this->input->post('Tgl_Perdes'),
        'Uraian_Perdes' => $this->input->post('Uraian_Perdes'),
        'Status' => $this->input->post('Status'),
        'Tgl_Input' => date('Y-m-d H:i:s'),
        'User_Input' => $this->session->userdata('Nama')
      ];
      $this->db->insert('ref_perdes', $params);
    }

   
	
}
