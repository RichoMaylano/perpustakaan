<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

 public function get_single_row_admin_by_email($email){
          $query = $this->db->get_where('admin', array('email' => $email));
          return $query->row();
     }

}