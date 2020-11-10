<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

	public function index()
	{
        
		//menampilkan views
		$data['query'] = $this->user_m->get();
		$this->template->load('halaman_template', 'user/halaman_user', $data);
	}

	public function tambah_aksi(){
        $IDUser = $this->input->post('IDUser');
		$Level = $this->input->post('Level');
		$Nama = $this->input->post('Nama');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$Keterangan = $this->input->post('Keterangan');
		$Kd_Kec = $this->input->post('Kd_Kec');
		$Kd_Desa = $this->input->post('Kd_Desa');
		

        $data = array(
            'IDUser' => $IDUser,
			'Level' => $Level,
			'Nama' => $Nama,
			'Username' => $Username,
			'Password' => $Password,
			'Keterangan' => $Keterangan,
			'Kd_Kec' => $Kd_Kec,
			'Kd_Desa' => $Kd_Desa,
			
            
		);
		$this->user_m->input_data($data, 'ta_iduser');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Disimpan');</script>";
                
                }
                echo "<script>window.location='".site_url('user')."';</script>";
	}

	public function edit($IDUser){
        $where = array('IDUser' =>$IDUser);
        $data['user'] = $this->user_m->edit_data($where,'ta_iduser')->result();
        $this->template->load('halaman_template', 'user/edit_user', $data);
	}
	
	public function update(){
        $IDUser = $this->input->post('IDUser');
		$Level = $this->input->post('Level');
		$Nama = $this->input->post('Nama');
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$Keterangan = $this->input->post('Keterangan');
		$Kd_Kec = $this->input->post('Kd_Kec');
		$Kd_Desa = $this->input->post('Kd_Desa');
		

        $data = array(
            'IDUser' => $IDUser,
			'Level' => $Level,
			'Nama' => $Nama,
			'Username' => $Username,
			'Password' => $Password,
			'Keterangan' => $Keterangan,
			'Kd_Kec' => $Kd_Kec,
			'Kd_Desa' => $Kd_Desa,
        );

        $where = array(
            'IDUser' => $IDUser
		);
		$this->user_m->update_data($where,$data,'ta_iduser');
        if($this->db->affected_rows() > 0){
                echo "<script>alert('Data Berhasil Diupdate');</script>";
                
                }
                echo "<script>window.location='".site_url('user')."';</script>";
	}

	
}