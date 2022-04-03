<?php
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Auth_Model');
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
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }
    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }
    public function login_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    }
    public function register()
    {
        $data['title'] = 'Register';
        $this->load->view('auth/register', $data);
    }
    public function register_user()
    {
        $data['title'] = 'Register';
        $this->load->view('auth/register', $data);
    }
}
