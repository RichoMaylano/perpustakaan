<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->helper('url');
  }

    public function index()
    {
         $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
     }

    public function dashboard()
    {

        $this->load->view('templates/header');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
     }


}
