<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class makanan_m extends CI_Model {
	
	public function tampil_data(){
        return $this->db->get_where('d_makanan');
    }

    public function simpanUser($table,$data){
        return $this->db->insert($table,$data);
    }

    public function hapusKue($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function editMakanan($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function tambah_makanan($table,$data){
        return $this->db->insert($table,$data);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}