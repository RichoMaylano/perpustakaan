 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{
public function __construct()
    {
        parent::__construct();
        $this->load->model("Koleksi_model");
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
      
    }

 public function index(){
        $data['koleksi'] = $this->Koleksi_model->get_koleksi();
        $this->load->view("koleksi",$data);
    }


     public function detail_buku(){
         $id_buku = $_GET['id'];
           $data['koleksi'] = $this->Koleksi_model->get_single_row_koleksi($id_buku);
        $this->load->view('detail_buku',$data);
    }

   public function tambah_koleksi(){
        $this->load->view('tambah_koleksi');
    }
     
    public function tambah_koleksi_proses(){
    $nama_buku = $this->input->post('nama_buku');
    $pengarang = $this->input->post('pengarang');
    $tahun = $this->input->post('tahun');
    $cover = $this->input->post('cover');

    $config['upload_path'] = './assets/cover/';
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['max_size'] = 10000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('cover')) {
      $this->session->set_flashdata('msg2', '<div class="alert alert-danger" role="alert">Gagal Insert Image</div>');
      redirect('koleksi');
    } else {
      $file_info = $this->upload->data();
      $cover = $file_info['file_name'];
      
    $data = [
      'nama_buku'     => $nama_buku,
      'pengarang'     => $pengarang,
      'tahun'     => $tahun,
      'cover'     => $cover
    ];

    $koleksi_exist = $this->Koleksi_model->get_single_row_koleksi($id_buku);

    if (!isset($koleksi_exist)) {
      $insert = $this->db->insert("koleksi", $data);

      if ($insert) {
        $this->session->set_flashdata('msg_add_koleksi', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menambahkan data Buku <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('koleksi');
      } else if (!$insert) {
        $this->session->set_flashdata('msg_add_koleksi', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menambahkan data Buku <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('koleksi');
      }
    } else {
      $this->session->set_flashdata('msg_add_koleksi', '<div class="alert alert-warning" role="alert">Data Buku sudah terdaftar</div>');
      redirect('koleksi');
            }
          }
    }


    public function delete_koleksi()
  {
    $id = $_GET['id'];
    $delete = $this->Koleksi_model->delete_koleksi($id);
    if ($delete) {
      $this->index();
      $this->session->set_flashdata('msg_del', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Buku berhasil Dihapus<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      redirect('koleksi');
    } else {
      $this->session->set_flashdata('msg_del', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
      redirect('koleksi');
    }
  }

    public function edit_koleksi(){
      $id_buku = $_GET['id'];
        $data['koleksi'] = $this->Koleksi_model->get_single_row_koleksi($id_buku);
        $this->load->view('edit_koleksi',$data);
    }

    public function edit_koleksi_proses(){

    $nama_buku = $this->input->post('nama_buku');
    $pengarang = $this->input->post('pengarang');
    $tahun = $this->input->post('tahun');
     $id_buku = $this->input->post('id_buku');
    $cover = $this->input->post('cover');

    $config['upload_path'] = './assets/cover/';
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['max_size'] = 10000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('cover')) {
      
      $data = [
        'nama_buku'     => $nama_buku,
      'pengarang'     => $pengarang,
      'tahun'     => $tahun,
      ];
      $this->Koleksi_model->update_koleksi($data, $id_buku);
      $this->index();
      $this->session->set_flashdata('msg1', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Buku berhasil Diupdate<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      redirect('koleksi');

    } else {
      $file_info = $this->upload->data();
      $cover = $file_info['file_name'];

      $data = [
        'nama_buku'     => $nama_buku,
      'pengarang'     => $pengarang,
      'tahun'     => $tahun,
      'cover'     => $cover
      ];
      $this->Koleksi_model->update_koleksi($data, $id_buku);
      $this->index();
      $this->session->set_flashdata('msg1', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Buku berhasil Diupdate<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      redirect('koleksi');
    }
   }


}