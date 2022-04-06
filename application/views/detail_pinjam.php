<?php $this->load->view('templates/header');?>
  <div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
    <h3>Detail Pinjam</h3>


  </div>
  <div class="card-body">
  <blockquote class="blockquote mb-0">
       <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="dataTable"  width="100%" cellspacing="0">
                          
                      
                      <tr style="text-align:center;">
                <th>ID_Pinjam</th>
                <th>Nama User</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
         </tr>

<?php foreach($pinjam as $row){ ?>
 <tr style="text-align:center;">
<td><?php echo $row->id_pinjam?></td>
<td><?php echo $row->nama?></td>
<td><?php echo $row->nama_buku?> <br>
<img style="width:150px;"src="<?php echo base_url('assets/cover/' . $row->cover);?>" />
</td>
<td><?php echo $row->tanggal_pinjam?></td>
<td><?php echo $row->status?></td>
</tr>
         <?php }?>
                                      </table>
</div>
    </blockquote>

  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>

<?php $this->load->view('templates/footer');?>