<?php

Class Fungsi{

    protected $ci;

    public function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('user_m');
        $IDUser = $this->ci->session->userdata('IDUser');
        $user_data = $this->ci->user_m->getid($IDUser)->row();
        return $user_data;
    }
}