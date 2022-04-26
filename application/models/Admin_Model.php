<?php
class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function addMember($data)
    {
        $this->db->insert('tbl_member', $data);
    }
    public function addShippingCost($data)
    {
        $this->db->insert('tbl_biaya_kirim', $data);
    }
    public function getShippingCost()
    {
        $q = $this->db->query("SELECT b.id, k.namaKota AS asal, j.namaKota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal = k.idKota JOIN tbl_kota j ON b.idKotaTujuan = j.idKota JOIN tbl_kurir r ON b.idKurir = r.idKurir");
        return $q->result_array();
    }
    public function getShippingCostByID($id)
    {
        $q = $this->db->query("SELECT b.id, k.namaKota AS asal, j.namaKota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal = k.idKota JOIN tbl_kota j ON b.idKotaTujuan = j.idKota JOIN tbl_kurir r ON b.idKurir = r.idKurir WHERE ID = $id");
        return $q->result_array();
    }
    public function deleteServiceDelivery($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_biaya_kirim');
    }
    public function updateServiceDelivery($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_biaya_kirim', $data);
    }
    public function getCategory()
    {
        $session = $this->session->userdata();
        $query = $this->db->query("SELECT * FROM tbl_kategori WHERE id_author = '$session[user_id]'");
        // $query = $this->db->query("SELECT tbl_kategori.id_author, tbl_kategori.nama, tbl_admin.id, tbl_admin.name FROM tbl_kategori INNER JOIN tbl_admin ON tbl_kategori.id_author = tbl_admin.id WHERE tbl_admin.id = '$session[user_id]'");
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
    public function addCity($data)
    {
        $this->db->insert('tbl_kota', $data);
    }
    public function updateCity($id, $data)
    {
        $this->db->where('idKota', $id);
        $this->db->update('tbl_kota', $data);
    }
    public function deleteCity($id)
    {
        $this->db->where('idKota', $id);
        $this->db->delete('tbl_kota');
    }
    public function addCourier($data)
    {
        $this->db->insert('tbl_kurir', $data);
    }
    public function updateCourier($id, $data)
    {
        $this->db->where('idKurir', $id);
        $this->db->update('tbl_kurir', $data);
    }
    public function deleteCourier($id)
    {
        $this->db->where('idKurir', $id);
        $this->db->delete('tbl_kurir');
    }
    public function getCity()
    {
        $query = $this->db->get('tbl_kota');
        return $query->result_array();
    }
    public function getCourier()
    {
        $query = $this->db->get('tbl_kurir');
        return $query->result_array();
    }
    public function getMembers()
    {
        $query = $this->db->get('tbl_member');
        return $query->result_array();
    }
    public function updateMember($id, $data)
    {
        $this->db->where('idKonsumen', $id);
        $this->db->update('tbl_member', $data);
    }
    public function deleteMember($id)
    {
        $this->db->where('idKonsumen', $id);
        $this->db->delete('tbl_member');
    }
    public function getMembersById($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_member WHERE idKonsumen = '$id'");
        return $query->result_array();
    }
}
