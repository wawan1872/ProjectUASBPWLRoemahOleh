<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan_m extends CI_Model {
	
	public function tampil_data(){
        return $this->db->get_where('pesanan');
    }

    public function simpanPesan($table,$data){
        return $this->db->insert($table,$data);
    }

    public function hapuspesan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function editPesanan($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}