 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
     function __construct()
  {
    parent::__construct();
    $this->load->model("Pinjam_model");
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
}

    public function index()
    {
        $data['koleksi'] = $this->Pinjam_model->get_koleksi();          
        $this->load->view('pinjam',$data);

    }


    public function pinjam_buku(){
         $id_buku = $_GET['id'];
        $data['koleksi'] = $this->Pinjam_model->get_single_row_koleksi($id_buku);      
        $this->load->view('peminjaman',$data);

    }

    public function detail_pinjam()
    {
          $data['pinjam']=$this->Pinjam_model->pinjam_buku();          
		    $this->load->view('detail_pinjam',$data);
    }

    public function add_pinjam(){
    // $id_pinjam = $this->input->post('id_pinjam');
    $id = $this->input->post('id');
    $id_buku = $this->input->post('id_buku');
    $nama = $this->input->post('nama');
    $nama_buku = $this->input->post('nama_buku');
    $status = $this->input->post('status');

    $data = [
    //   'id_pinjam'  => $id_pinjam,
    'id'  => $id,
    'id_buku'  => $id_buku,
    'nama'  => $nama,
        'nama_buku'      => $nama_buku,
      'status' => $status
    ];
      $insert = $this->db->insert("pinjam", $data);
    if ($insert) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Pinjaman</div>');
        redirect(base_url('Pinjam/detail_pinjam'));
      } else if (!$insert) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data Pinjaman</div>');
        redirect(base_url('Pinjam/peminjaman'));
      }
    }

    

}