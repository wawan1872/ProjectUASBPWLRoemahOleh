<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginci');
    }
    public function masuk()
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];


        $data = $this->loginci->getuser('user');
        foreach ($data as $row) {

            if ($user == $row['username']) {
                $this->load->view('dashboard');

                break;
            } else if ($user == 'admin' && $pass == '123') {
                $this->load->view('admin');
                break;
            }
        }
        
    }

    public function daftar()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => md5($password)
        );
        $status = $this->loginci->tambahUser("user", $data);
        if ($status) {
            $this->load->view('sign-in');
        } else {
            echo "Username gagal ditambahkan!";
        }
    }

    public function logout(){
		redirect('welcome/index');
    }
}
