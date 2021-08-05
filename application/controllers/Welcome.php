<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginci');
	}
	public function index()
	{
		$this->load->view('sign-in');
	}
	public function regis()
	{
		$this->load->view('sign-up');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function user()
	{
		$this->load->view('dashboard');
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

	public function data_user(){
		$data['user'] = $this ->user_m->tampil_data()->
        result();
		$this->load->view('data_user', $data);
	}

	public function data_makanan(){
		$data['d_makanan'] = $this ->makanan_m->tampil_data()->
        result();
		$this->load->view('data_makanan', $data);
	}

	public function data_pesanan(){
		$data['pesanan'] = $this ->pesanan_m->tampil_data()->
        result();
		$this->load->view('data_pesanan', $data);
	}

	public function homeadmin(){
		$this->load->view('admin');

	}

	public function tambah_makanan(){
		$this->load->view('tambah_makanan');
	}

	public function logout(){
		redirect('welcome/index');
    }

	public function about(){
		$this->load->view('about');
	}

	public function pesanan(){
		$this->load->view('form_pesan');
	}

	

}
