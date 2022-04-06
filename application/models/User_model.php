<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

 public function get_users()
    {
    $query = $this->db->query("select * from users");
    return $query->result();
    }

    public function get_single_row_users($id)
     {
          $query = $this->db->get_where('users', array('id' => $id));
          return $query->row();
     }
     
      public function delete_users($id)
  {
    return $this->db->delete('users', array('id' => $id));
  }

  public function update_users($data, $id_user)
  {
    $this->db->where('id', $id_user);
    $this->db->update('users', $data);
  }

  public function auth($email, $pass){
    $this->db->where('email',$email);
    $this->db->where('password',$pass);
    if($this->db->get('users')->num_rows()==1){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_detail($email){
    $this->db->where('email', $email);
    return $this->db->get('users')->row_array();
  }

  public function update_cookie($cookie, $id){
    $data=[
      'cookie'=> $cookie
    ];
    $this->db->where('id', $id);
    return $this->db->update('users', $data);
  }

  public function get_detail_cookie($cookie){
    $this->db->where('cookie', $cookie);
    return $this->db->get('users')->row_array();
  }

  public function register($enc_password)
     {
          // User data array
          $data = array(
               'id' => $this->input->post('id'),
               'nama' => $this->input->post('nama'),
               'email' => $this->input->post('email'),
               'password' => $enc_password,
               'alamat' => $this->input->post('alamat'),
               'telepon' => $this->input->post('telepon')
          );

          // Insert user
          return $this->db->insert('users', $data);
     }

     // Check email exists
     public function check_email_exists($email)
     {
          $query = $this->db->get_where('users', array('email' => $email));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }
  
     //check name exist
     public function check_name_exists($nama)
     {
          $query = $this->db->get_where('users', array('nama' => $nama));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }


 }