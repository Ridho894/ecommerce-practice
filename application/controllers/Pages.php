<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
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
            'session' => $this->session->userdata(),
        );
        $session_data = $this->session->userdata();
        $this->load->view('guest/home', $data);
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/index', $data);
    }
    public function category()
    {
        $data['title'] = 'Category';
        $this->load->view('admin/category', $data);
    }
    public function add_category()
    {
        $data['title'] = 'Add Category';
        $this->load->view('admin/add_category', $data);
    }
    public function add_service_delivery()
    {
        $data['title'] = 'Add Service Delivery';
        $this->load->view('admin/add_service_delivery', $data);
    }
    public function delivery()
    {
        $data['title'] = 'Delivery Service';
        $this->load->view('admin/delivery', $data);
    }
    public function member()
    {
        $data['title'] = 'Member';
        $this->load->view('admin/member', $data);
    }
}
