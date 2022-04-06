<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

 public function get_koleksi()
    {
    $query = $this->db->query("select * from koleksi");
    return $query->result();
    
}
     public function get_single_row_koleksi($id)
     {
          $query = $this->db->get_where('koleksi', array('id_buku' => $id));
          return $query->row();
     }

   public function delete_koleksi($id)
  {
    return $this->db->delete('koleksi', array('id_buku' => $id));
  }

  public function update_koleksi($data, $id_buku)
  {
    $this->db->where('id_buku', $id_buku);
    $this->db->update('koleksi', $data);
  }
}

