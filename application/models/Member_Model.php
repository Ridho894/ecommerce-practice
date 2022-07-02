<?php
class Member_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function getProductById($id)
    {
        $q = $this->db->query("SELECT * FROM tbl_produk WHERE idProduk = $id");
        return $q->result_array();
    }
}
