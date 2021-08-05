<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pesanan_c extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('pesanan_m');
	}

    public function index(){
        $data['pesanan'] = $this ->pesanan_m->tampil_data()->
        result();
        $this->load->view('data_pesanan',$data);
    }

	public function index2(){
        $this->load->view('dashboard');
    }
    
    public function aksi_input(){
		$id_pesanan = $this->input->post('id_pesanan');
		$nama = $this->input->post('nama');
		$m_dipilih = $this->input->post('m_dipilih');
		$har_satuan = $this->input->post('har_satuan');
		$jumlah = $this->input->post('jumlah');
		$total = $this->input->post('total');
		$data = array(
			'id_pesanan' => $id_pesanan,
			'nama' => $nama,
			'm_dipilih' => $m_dipilih,
            'har_satuan' => $har_satuan,
            'jumlah' => $jumlah,
            'total' => $total
		);
		$status = $this->pesanan_m->simpanPesan("pesanan",$data);
		if($status){
			redirect(base_url("/pesanan_c/index2"));
		}else{
			echo "Data pelanggan gagal ditambahkan!";
		}
	}

	public function aksi_hapus($id_pesanan){
		$where = array('id_pesanan' =>$id_pesanan);
		$this->pesanan_m->hapuspesan($where,'pesanan');
		redirect(base_url("/index.php/pesanan_c/index"));
	}

	public function aksi_edit($id_pesanan){
		$where = array('id_pesanan' => $id_pesanan);
		$data['pesanan']=$this->pesanan_m->editPesanan($where,'pesanan')
		->result();
		$this->load->view('edit_pesanan',$data);
	}

	public function update(){
		$id_pesanan  = $this->input->post('id_pesanan');
		$nama    = $this->input->post('nama');
		$m_dipilih      = $this->input->post('m_dipilih');
		$har_satuan    = $this->input->post('har_satuan');
		$jumlah    = $this->input->post('jumlah');
		$total    = $this->input->post('total');
		
		
		$data = array(
			'nama'  => $nama,
			'm_dipilih'    => $m_dipilih,
			'har_satuan'  => $har_satuan,
			'jumlah'  => $jumlah,
			'total'  => $total
		);
		$where = array(
			'id_pesanan' => $id_pesanan
		);
		
		$this->makanan_m->update_data($where,$data,'pesanan');
		redirect('/index.php/pesanan_c/index');
	}

	
}