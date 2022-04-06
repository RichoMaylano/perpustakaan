<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("User_model");
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
      
    }

    public function my_profile(){
        $this->load->view('profile');
    }

    public function edit_profile(){
        $this->load->view('edit_profile');
    
    }


}
