<?php
class Auth_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('tbl_admin');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function register($data)
    {
        $this->db->insert('tbl_admin', $data);
    }
    public function get_name($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('tbl_admin');
        return $query->row()->name;
    }
}
