<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class makanan_c extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('makanan_m');
	}

    public function index(){
        $data['d_makanan'] = $this ->makanan_m->tampil_data()->
        result();
        $this->load->view('data_makanan',$data);
    }

    public function aksi_input(){
		$id_makanan = $this->input->post('id_makanan');
		$nama = $this->input->post('nama');
		$stock = $this->input->post('stock');
		$harga = $this->input->post('harga');
		$data = array(
			'id_makanan' => $id_makanan,
			'nama' => $nama,
			'stock' => $stock,
            'harga' => $harga
		);
		$status = $this->makanan_m->tambah_makanan("d_makanan",$data);
		if($status){
			redirect(base_url("/makanan_c/index"));
		}else{
			echo "Data pelanggan gagal ditambahkan!";
		}
	}

	public function aksi_hapus($id_makanan){
		$where = array('id_makanan' => $id_makanan);
		$this->makanan_m->hapuskue($where,'d_makanan');
		redirect(base_url("/index.php/makanan_c/index"));
	}

	public function aksi_edit($id_makanan){
		$where = array('id_makanan' => $id_makanan);
		$data['d_makanan']=$this->makanan_m->editMakanan($where,'d_makanan')
		->result();
		$this->load->view('edit_makanan',$data);
	}

	public function update(){
		$id_makanan  = $this->input->post('id_makanan');
		$nama    = $this->input->post('nama');
		$stock      = $this->input->post('stock');
		$harga    = $this->input->post('harga');
		
		
		$data = array(
			'nama'  => $nama,
			'stock'    => $stock,
			'harga'  => $harga
		);
		$where = array(
			'id_makanan' => $id_makanan
		);
		
		$this->makanan_m->update_data($where,$data,'d_makanan');
		redirect('/index.php/makanan_c/index');
	}


	
}