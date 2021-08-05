<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model {
	
	public function tampil_data(){
        return $this->db->get_where('user');
    }

    public function simpanUser($table,$data){
        return $this->db->insert($table,$data);
    }

    public function hapusUser($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function editUser($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}