<?php
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
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
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }
    public function login()
    {
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }
    public function login_member()
    {
        $data['title'] = 'Login Member';
        $this->load->view('auth/login_member', $data);
    }
    public function login_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // make login
        $user_id = $this->Auth_Model->login($email, $password);
        if ($user_id) {
            // create session
            $user_data = array(
                'user_id' => $user_id->id,
                'name' => $user_id->name,
                'email' => $email,
                'is_login' => 1,
            );
            setcookie('user_id', $user_id->id, time() + (86400 * 30), "/");
            $this->session->set_userdata($user_data);
            redirect('pages/dashboard');
        } else {
            // set message
            setcookie('user_id', '', time() - 3600, "/");
            redirect('auth/login');
            $this->session->set_flashdata('login_failed', 'Login is invalid');
            // delete cookies
        }
    }
    public function register()
    {
        $data['title'] = 'Register';
        $this->load->view('auth/register', $data);
    }
    public function register_user()
    {
        $data['title'] = 'Register';
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $full_name = $first_name . ' ' . $last_name;
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password-confirm');
        if ($password != $password_confirm) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password not match!
            </div>');
            redirect('auth/register');
        } else {
            $data = array(
                'name' => $full_name,
                'email' => $email,
                'password' => $password,
            );
            $this->Auth_Model->register($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created! Please login.
            </div>');
            redirect('auth/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_login');
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('auth/login');
    }
}
