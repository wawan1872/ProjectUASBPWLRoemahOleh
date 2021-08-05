<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_c extends CI_Controller
{
    public function login(){
        $this->load->view('sign-in');
    }
}
