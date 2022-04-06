<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
     function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->helper('url', 'form', 'text', 'cookie', 'string');
    $this->load->library(array('form_validation', 'session'));

}

    public function index()
    {
    $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('dashboard'));
        } else if($cookie != ''){
            $sesi = $this->User_model->get_detail_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect(base_url('dashboard'));
        }
        $this->load->view('login');
  
  }

    public function auth()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $auth = $this->User_model->auth($email,$password);
        $sesi = $this->User_model->get_detail($email);
        if($auth == TRUE){
            if($this->input->post('remember') != ''){
                $key= random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 *24 *30);
                $this->User_model->update_cookie($key, $sesi['id']);
            }
        $this->session->set_userdata($sesi);
        redirect(base_url('dashboard'));
        }
         else{
            $this->session->set_flashdata('msg_login','<div class="alert alert-danger" role="alert">Password atau Email salah</div>');
        redirect(base_url('login'));
        }
    }

            public function logout(){
                delete_cookie('tigaserangkai');
                $this->session->sess_destroy();
                $this->auth();
            }


        public function register(){
            $data['title'] = 'Register';

        $this->form_validation->set_rules('nama', 'nama', 'required|is_unique[users.nama]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');
        

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('register', $data);
        } else {
            $enc_password = md5($this->input->post('password'));
            $this->User_model->register($enc_password);
            redirect(base_url('login'));
        }
        }
}