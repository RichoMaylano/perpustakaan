 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
 
public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
       
    }

 public function index(){
        $data['users'] = $this->User_model->get_users();
      $this->load->view('user',$data);
    }

  public function detail_user(){
         $id_user = $_GET['id'];
           $data['users'] = $this->User_model->get_single_row_users($id_user);
        $this->load->view('detail_user',$data);
    }


    public function tambah_user(){
        $this->load->view('tambah_user');
    }
     
   public function tambah_user_proses(){
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $alamat = $this->input->post('alamat');
    $telepon = $this->input->post('telepon');
    $foto = $this->input->post('foto');

    $config['upload_path'] = './assets/foto/';
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['max_size'] = 10000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('foto')) {
      $this->session->set_flashdata('msg2', '<div class="alert alert-danger" role="alert">Gagal Insert Image</div>');
      redirect('user');
    } else {
      $file_info = $this->upload->data();
      $foto = $file_info['file_name'];
      
    $data = [
      'nama'     => $nama,
      'email'     => $email,
      'password'     => $password,
      'alamat'     => $alamat,
      'telepon'     => $telepon,
      'foto'     => $foto
    ];

    $user_exist = $this->User_model->get_single_row_users($id);

    if (!isset($user_exist)) {
      $insert = $this->db->insert("users", $data);

      if ($insert) {
        $this->session->set_flashdata('msg_add_user', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menambahkan data Buku <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('user');
      } else if (!$insert) {
        $this->session->set_flashdata('msg_add_user', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menambahkan data Buku <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('user');
      }
    } else {
      $this->session->set_flashdata('msg_add_user', '<div class="alert alert-warning" role="alert">Data Buku sudah terdaftar</div>');
      redirect('user');
            }
          }
    }

     public function delete_user(){
      $id= $_GET['id'];
    $delete = $this->User_model->delete_users($id);
    if ($delete) {
      $this->index();
      $this->session->set_flashdata('msg_del_user', '<div class="alert alert-success" role="alert">Data User Berhasil Dihapus</div>');
      redirect('user');
    } else {
      $this->session->set_flashdata('msg_del_user', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
      redirect('user');
    }
    }

        public function edit_user(){
      $id_user = $_GET['id'];
        $data['users'] = $this->User_model->get_single_row_users($id_user);
        $this->load->view('edit_user',$data);
    }

    public function edit_user_proses(){

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $alamat = $this->input->post('alamat');
    $telepon = $this->input->post('telepon');
     $id_user = $this->input->post('id');
    $foto = $this->input->post('foto');

    $config['upload_path'] = './assets/foto/';
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['max_size'] = 10000;
    $config['overwrite'] = TRUE;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('foto')) {
      
      $data = [
        'nama'     => $nama,
      'email'     => $email,
      'password'     => $password,
      'alamat'     => $alamat,
      'telepon'     => $telepon,
      ];
      $this->User_model->update_users($data, $id_user);
      $this->index();
      $this->session->set_flashdata('msg_update_user', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data User berhasil Diupdate<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      redirect('user');

    } else {
      $file_info = $this->upload->data();
      $foto = $file_info['file_name'];

      $data = [
        'nama'     => $nama,
      'email'     => $email,
      'password'     => $password,
      'alamat'     => $alamat,
      'telepon'     => $telepon,
      'foto'     => $foto
      ];
      $this->User_model->update_users($data, $id_user);
      $this->index();
      $this->session->set_flashdata('msg_update_user', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data User berhasil Diupdate<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      redirect('user');
    }
   }


}