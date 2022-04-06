<?php $this->load->view('templates/header');?>
  <div class="container mt-3">

        <div class="card">
  <div class="card-header">

  <div class="row">
<div class="col-sm-10">
  <h3>Koleksi Buku</h3>
</div>
  <div class="col-sm-2">
  
</div>
</div>

</div>
  <div class="card-body">
  <a href="<?= base_url('koleksi/tambah_koleksi');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Tambah</a>
  <hr>
  <blockquote class="blockquote mb-0">
   
                <?php echo $this->session->flashdata('msg_add_koleksi'); ?>
                <?php echo $this->session->flashdata('msg1'); ?>
                <?php echo $this->session->flashdata('msg_del'); ?>
  <table class="table table-bordered table-striped">
       <tr style="text-align:center;">
<th>ID</th>
<th>Judul Buku</th>
<th>Pengarang</th>
<th>Tanggal Terbit</th>
<th>Aksi</th>
                                                </tr>
         <?php foreach($koleksi as $row){ ?>
                                                                                   <tr>
<td><?php echo $row->id_buku?></td>
<td><?php echo $row->nama_buku?></td>
<td><?php echo $row->pengarang?></td>
<td><?php echo $row->tahun?></td>                                      
<td style="text-align:center;"> 
    <a href="http://localhost/LatihanJWP1/koleksi/detail_buku?id=<?php echo htmlspecialchars($row->id_buku) ?>" type="button" class="btn btn-primary"><i class="icon-eye-open"></i>&nbsp Detail Buku</a>
    <a href="http://localhost/LatihanJWP1/koleksi/edit_koleksi?id=<?php echo htmlspecialchars($row->id_buku) ?>" type="button" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp Edit</a>
    <a href="http://localhost/LatihanJWP1/koleksi/delete_koleksi?id=<?php echo htmlspecialchars($row->id_buku) ?>" title="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"><i class="icon-trash"></i>&nbspDelete</a>
    </td>                                            </tr>
<?php }?>
                                      </table>
    </blockquote>
  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>



<?php $this->load->view('templates/footer');?>

