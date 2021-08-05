<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_c extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('user_m');
	}

    public function index(){
        $data['user'] = $this ->user_m->tampil_data()->
        result();
        $this->load->view('data_user',$data);
    }
    
    public function aksi_input(){
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$telepon = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'jenis_kelamin' => $jenis_kelamin,
            'telepon' => $telepon,
            'alamat' => $alamat
		);
		$status = $this->m_pelanggan->tambahPelanggan("pelanggan",$data);
		if($status){
			redirect(base_url("/index.php/c_pelanggan/index"));
		}else{
			echo "Data pelanggan gagal ditambahkan!";
		}
	}

	public function aksi_hapus($id_pembeli){
		$where = array('id_pembeli' =>$id_pembeli);
		$this->user_m->hapusUser($where,'user');
		redirect(base_url("/index.php/user_c/index"));
	}

	public function aksi_edit($id_pembeli){
		$where = array('id_pembeli' => $id_pembeli);
		$data['user']=$this->user_m->editUser($where,'user')
		->result();
		$this->load->view('edit_user',$data);
	}

	public function update(){
		$id_pembeli  = $this->input->post('id_pembeli');
		$username    = $this->input->post('username');
		$alamat      = $this->input->post('alamat');
		$password    = $this->input->post('password');
		
		
		$data = array(
			'username'  => $username,
			'alamat'    => $alamat,
			'password'  => $password
		);
		$where = array(
			'id_pembeli' => $id_pembeli
		);
		
		$this->user_m->update_data($where,$data,'user');
		redirect('/index.php/user_c/index');
	}
	
}