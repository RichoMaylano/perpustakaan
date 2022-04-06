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
  <!-- <a href="<?= base_url('Pinjam/pinjam_buku');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Pinjam Buku</a> -->
  <a href="<?= base_url('Pinjam/detail_pinjam');?>" type="button" class="btn btn-primary"><i class="icon-book"></i>&nbsp Detail Peminjaman</a>
  <hr>
  <blockquote class="blockquote mb-0">
   
     <table class="table table-bordered table-striped">
       <tr style="text-align:center;">
<th>ID</th>
<th>Judul Buku</th>
<th>Pengarang</th>
<th>Tanggal Terbit</th>
<th>Cover</th>
<th>Aksi</th>
                                                </tr>
         <?php foreach($koleksi as $row){ ?>
               <tr style="text-align:center;">
<td><?php echo $row->id_buku?></td>
<td><?php echo $row->nama_buku?></td>
<td><?php echo $row->pengarang?></td>
<td><?php echo $row->tahun?></td>                                      
<td><img style="width:150px;"src="<?php echo base_url('assets/cover/' . $row->cover);?>" /></td>                                      
<td>
  <a href="http://localhost/LatihanJWP1/Pinjam/pinjam_buku?id=<?php echo htmlspecialchars($row->id_buku) ?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Pinjam Buku</a>
  </td>                                      
                                           </tr>
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

