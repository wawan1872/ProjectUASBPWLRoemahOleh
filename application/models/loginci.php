<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginci extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getUser($table){
        $data = $this->db->get($table);
        return $data->result_array();
    }
    function tambahUser($table,$data){
        return $this->db->insert($table,$data);
    }
    public function getAdmin($table){
        $data = $this->db->get($table);
        return $data->result_array();
    }
}