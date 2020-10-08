<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_m extends CI_Model {

    public function get($id = null){
        $this->db = $this->load->database('default', TRUE);
        $sql = "select * from dbo.Rek_Asset1";
        $query = $this->db->query($sql);

        if($query){
            if($query->num_rows() > 0)
            {
                foreach ($query->resul_array() as $row){
                    $items[] =$row;
                }
                $data['itemlist'] = $items;
            }
        }
        
    }

   
	
}