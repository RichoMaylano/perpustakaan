<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
 function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
   
  }
 
    public function index()
    {
 
        $this->load->view('templates/header');
        $this->load->view('about');
        $this->load->view('templates/footer');
    }
}
