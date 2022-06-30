<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data = array(
            'title' => "Home",
            'products' => $this->Admin_Model->getProduct(),
        );
        $this->load->view('guest/home', $data);
    }
    public function dashboard()
    {
        $data = array(
            'title' => "Dashboard",
            'session' => $this->session->userdata(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/index', $data);
    }
    public function products()
    {
        $data = array(
            'title' => "Products",
            'session' => $this->session->userdata(),
            'products' => $this->Admin_Model->getProduct(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/products/index', $data);
    }
    public function profile()
    {
        $data = array(
            'title' => "Profile",
            'session' => $this->session->userdata(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/profile/index', $data);
    }
    public function add_product()
    {
        $data = array(
            'title' => "Add Product",
            'session' => $this->session->userdata(),
            'category' => $this->Admin_Model->getCategory(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/products/add_product', $data);
    }
    public function process_add_product()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $berat = $this->input->post('berat');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');

        $gambar = $_FILES['foto']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gift';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gambar Gagal Di Upload !";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            "idkat" => $kategori,
            "idToko" => 1,
            "namaProduk" => $nama,
            "harga" => $harga,
            "stok" => $stok,
            "berat" => $berat,
            "deskripsiProduk" => $deskripsi,
            "foto" => $gambar,
        );
        $this->Admin_Model->addProduct($data);
        redirect('pages/products');
    }
    public function category()
    {
        $data = array(
            'title' => "Category",
            'session' => $this->session->userdata(),
            'category' => $this->Admin_Model->getCategory(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/categories/index', $data);
    }
    public function delivery()
    {
        $data = array(
            'title' => "Delivery Service",
            'session' => $this->session->userdata(),
            'city' => $this->Admin_Model->getCity(),
            'courier' => $this->Admin_Model->getCourier(),
            'shippingCost' => $this->Admin_Model->getShippingCost()
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/deliveries/index', $data);
    }
    public function edit_service_delivery($id)
    {
        $data = array(
            'title' => "Edit Delivery Services",
            'session' => $this->session->userdata(),
            'shippingCost' => $this->Admin_Model->getShippingCostByID($id),
            'courier' => $this->Admin_Model->getCourier(),
            'city' => $this->Admin_Model->getCity(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/deliveries/edit_service_delivery', $data);
    }
    public function delete_service_delivery($id)
    {
        $this->Admin_Model->deleteServiceDelivery($id);
        redirect('pages/delivery');
    }
    public function add_category()
    {
        $data = array(
            'title' => "Add Category",
            'session' => $this->session->userdata(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $categoryName = $this->input->post('categoryName');
        $data_database = array(
            'nama' => $categoryName,
            "id_author" => $this->session->userdata()['user_id'],
        );
        $this->Admin_Model->addCategory($data_database);
        redirect('pages/category', $data);
    }
    public function delete_category($id)
    {
        $data = array(
            'title' => "Add Category",
            'session' => $this->session->userdata(),
        );
        // delete data
        $this->Admin_Model->deleteCategory($id);
        redirect('pages/category', $data);
    }
    public function add_service_delivery()
    {
        $data = array(
            'title' => "Delivery Service",
            'session' => $this->session->userdata(),
            'city' => $this->Admin_Model->getCity(),
            'courier' => $this->Admin_Model->getCourier(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/deliveries/add_service_delivery', $data);
    }
    public function process_service_delivery()
    {
        $session = $this->session->userdata();
        $idKurir = $this->input->post('idKurir');
        $idKotaAsal = $this->input->post('idKotaAsal');
        $idKotaTujuan = $this->input->post('idKotaTujuan');
        $biaya = $this->input->post('biaya');
        $data = array(
            "idKurir" => $idKurir,
            "idKotaAsal" => $idKotaAsal,
            "idKotaTujuan" => $idKotaTujuan,
            "biaya" => $biaya,
            "author" => $session['name']
        );
        $this->Admin_Model->addShippingCost($data);
        redirect('pages/delivery');
    }
    public function update_service_delivery($id)
    {
        $session = $this->session->userdata();
        $idKurir = $this->input->post('idKurir');
        $idKotaAsal = $this->input->post('idKotaAsal');
        $idKotaTujuan = $this->input->post('idKotaTujuan');
        $biaya = $this->input->post('biaya');
        $data = array(
            "idKurir" => $idKurir,
            "idKotaAsal" => $idKotaAsal,
            "idKotaTujuan" => $idKotaTujuan,
            "biaya" => $biaya,
            "author" => $session['name']
        );
        $this->Admin_Model->updateServiceDelivery($id, $data);
        redirect('pages/delivery');
    }
    public function add_city()
    {
        $cityName = $this->input->post('namaKota');
        $session = $this->session->userdata();
        $data = array(
            'namaKota' => $cityName,
            'author' => $session['name']
        );
        $this->Admin_Model->addCity($data);
        redirect('pages/delivery');
    }
    public function edit_city($id)
    {
        $session = $this->session->userdata();
        $data = array(
            'namaKota' => $this->input->post('namaKota'),
            'author' => $session['name']
        );
        $this->Admin_Model->updateCity($id, $data);
        redirect('pages/delivery');
    }
    public function delete_city($id)
    {
        $this->Admin_Model->deleteCity($id);
        redirect('pages/delivery');
    }
    public function add_courier()
    {
        $session = $this->session->userdata();
        $courierName = $this->input->post('namaKurir');
        $data = array(
            'namaKurir' => $courierName,
            'author' => $session['name']
        );
        $this->Admin_Model->addCourier($data);
        redirect('pages/delivery');
    }
    public function edit_courier($id)
    {
        $session = $this->session->userdata();
        $data = array(
            'namaKurir' => $this->input->post('namaKurir'),
            'author' => $session['name']
        );
        $this->Admin_Model->updateCourier($id, $data);
        redirect('pages/delivery');
    }
    public function delete_courier($id)
    {
        $this->Admin_Model->deleteCourier($id);
        redirect('pages/delivery');
    }
    public function members()
    {
        $data = array(
            'title' => "Members",
            'session' => $this->session->userdata(),
            'member' => $this->Admin_Model->getMembers(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/members/index', $data);
    }
    public function add_member()
    {
        $data = array(
            'title' => "Add Members",
            'session' => $this->session->userdata(),
            'city' => $this->Admin_Model->getCity(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/members/add_member', $data);
    }
    public function delete_member($id)
    {
        $this->Admin_Model->deleteMember($id);
        redirect('pages/members');
    }
    public function process_add_member()
    {
        $username = $this->input->post('username');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');
        $data = array(
            "username" => $username,
            "password" => $password,
            "namaKonsumen" => $namaKonsumen,
            "alamat" => $alamat,
            "idKota" => $kota,
            "email" => $email,
            "tlpn" => $tlpn,
            "statusAktif" => $statusAktif
        );
        $this->Admin_Model->addMember($data);
        redirect('pages/members');
    }
    public function edit_member($id)
    {
        $data = array(
            'title' => "Edit Members",
            'session' => $this->session->userdata(),
            'city' => $this->Admin_Model->getCity(),
            'member' => $this->Admin_Model->getMembersById($id)
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/members/edit_member', $data);
    }
    public function process_edit_member()
    {
        $idKonsumen = $this->input->post('idKonsumen');
        $username = $this->input->post('username');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');
        $data = array(
            "username" => $username,
            "password" => $password,
            "namaKonsumen" => $namaKonsumen,
            "alamat" => $alamat,
            "idKota" => $kota,
            "email" => $email,
            "tlpn" => $tlpn,
            "statusAktif" => $statusAktif
        );
        $this->Admin_Model->updateMember($idKonsumen, $data);
        redirect('pages/members');
    }
    public function checkout()
    {
        $data = array(
            'title' => "Checkout",
            'products' => $this->Admin_Model->getProduct(),
        );
        $this->load->view('guest/checkout', $data);
    }
}
