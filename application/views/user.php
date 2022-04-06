<?php $this->load->view('templates/header');?>
  <div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
  
<div class="row">
<div class="col-sm-10">
  <h3>List User</h3>
</div>
  <div class="col-sm-2">
  
</div>
</div>


  </div>
  <div class="card-body">
  <a href="<?= base_url('user/tambah_user');?>" type="button" class="btn btn-success"><i class="icon-plus"></i>&nbsp Tambah</a>
  <hr>
  <blockquote class="blockquote mb-0">
      <?php echo $this->session->flashdata('msg_update_user'); ?>
      <?php echo $this->session->flashdata('msg_del_user'); ?>
                      <table class="table table-bordered table-striped">
                      <tr style="text-align:center;">
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
         </tr>

<?php foreach($users as $row){ ?>
        <tr style="text-align:center;">
<td><?php echo $row->id?></td>
<td><?php echo $row->nama?></td>
<td><?php echo $row->email?></td>
<td style="text-align:center;">
   <a href="http://localhost/LatihanJWP1/User/detail_user?id=<?php echo htmlspecialchars($row->id) ?>" type="button" class="btn btn-primary"><i class="icon-eye-open"></i>&nbsp Detail</a>
    <a href="http://localhost/LatihanJWP1/User/edit_user?id=<?php echo htmlspecialchars($row->id) ?>" type="button" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp Edit</a>  
<a href="http://localhost/LatihanJWP1/User/delete_user?id=<?php echo htmlspecialchars($row->id) ?>" title="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')"><i class="icon-trash"></i>&nbspDelete</a></td>
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