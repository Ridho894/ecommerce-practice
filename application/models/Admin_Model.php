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
    public function addCategory($data)
    {
        $this->db->insert('tbl_kategori', $data);
    }
    public function deleteCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_kategori');
    }
}
