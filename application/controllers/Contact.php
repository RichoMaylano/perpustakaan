<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
    if ($this->session->userdata('nama') == '') {
    redirect(base_url('dashboard'));
}
  }
  
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}
