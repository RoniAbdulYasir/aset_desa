<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'IDUser' => $row->IDUser,
					'Level' => $row->Level,
					'Nama_Kecamatan' => $row->Nama_Kecamatan,
					'Kd_Kec' => $row->Kd_Kec,
					'Nama_Desa' => $row->Nama_Desa,
					'Kd_Desa' => $row->Kd_Desa,
					'Nama' => $row->Nama,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, Login Anda Berhasil');
					window.location='".site_url('dashboard')."';
				</script>";		
			}else {
				echo "<script>
					alert('Login Anda Gagal, Username / Password Salah');
					window.location='".site_url('auth/login')."';
				</script>";	
			}
		}

	}

	public function logout() {
		$params = array('IDUser', 'Level', 'Nama_Kecamatan', 'Nama_Desa');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
