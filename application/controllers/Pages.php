<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->helper('url');
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
        $this->load->view('admin/category', $data);
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
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/add_service_delivery', $data);
    }
    public function delivery()
    {
        $data = array(
            'title' => "Delivery Service",
            'session' => $this->session->userdata(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/delivery', $data);
    }
    public function member()
    {
        $data = array(
            'title' => "Member",
            'session' => $this->session->userdata(),
        );
        if (!isset($this->session->userdata()['is_login'])) {
            redirect('auth/login');
        }
        $this->load->view('admin/member', $data);
    }
}
