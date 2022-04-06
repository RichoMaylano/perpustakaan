<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model
{
 function _construct(){
     $this->load->database();
 }

public function get_koleksi()
    {
    $query = $this->db->query("select * from koleksi");
    return $query->result();
    
}

 public function get_pinjam()
    {
    $query = $this->db->query("select * from pinjam");
    return $query->result();
    }

     public function get_single_row_koleksi($id)
     {
          $query = $this->db->get_where('koleksi', array('id_buku' => $id));
          return $query->row();
     }

  public function get_single_row_pinjam($id)
     {
          $query = $this->db->get_where('pinjam', array('id_pinjam' => $id));
          return $query->row();
     }

    function pinjam_buku() 
    {
     

      $this->db->select('*');
      $this->db->order_by('id_pinjam');
      return $this->db->from('pinjam')
            ->join('koleksi', 'pinjam.id_buku=koleksi.id_buku')
            ->join('users', 'pinjam.id=users.id')
          ->get()
          ->result();
    }  


}