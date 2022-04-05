<?php
class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function getCategory()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }
}
