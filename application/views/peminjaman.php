<?php $this->load->view('templates/header'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Pinjam Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
             <form action="add_pinjam" method="post" enctype="multipart/form-data">
             <?php echo $this->session->flashdata('message'); ?>                   
             <div class="mb-3">
                                   <label for="id_user" class="form-label">ID User</label>
                                    <input type="text"  name="id" class="form-control" id="id" list="suggestion1" value="<?php echo $this->session->userdata('id') ?>" >
                                  </div>
                          
                                  <div class="mb-3">
                                    <div class="form-group row">

                                    <div class="col-sm-6">
                                    <label for="id_buku" class="form-label">ID Buku</label>
                                    <input type="text" name="id_buku" class="form-control" id="id_buku" value="<?php echo $koleksi->id_buku?>" list="suggestions2" >
                               <!-- <datalist id="suggestions2">
                                          <select class="form-control" id="category_name" name="category_name">
                            <option selected="0"></option>
                            <?php foreach($koleksi as $row) : ?>
                              <option value="<?php echo $row->id_buku;?>"> <?php echo $row->nama_buku;?></option>
                            <?php endforeach; ?>
                            </select>
                                  </datalist> -->
                            </div>

                            <div class="col-sm-6">

                <label for="nama_buku" class="form-label">Nama Buku</label>
                                    <input type="text" name="nama_buku" class="form-control" value="<?php echo $koleksi->nama_buku?>" id="nama_buku" list="suggestions3" >
                               <!-- <datalist id="suggestions3">
                                          <select class="form-control" id="nambuk">
                            <option selected="0"></option>
                            <?php foreach($koleksi as $row) : ?>
                              <option value="<?php echo $row->nama_buku;?>"> <?php echo $row->id_buku;?></option>
                            <?php endforeach; ?>
                            </select>
                                  </datalist> -->
                            </div>
                            </div>
                                  </div>
                          
             
                              <div class="mb-3">
                                    <label for="tanggal_pinjam" class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $this->session->userdata('nama') ?>" >
                                  </div>
                              
                                                            
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" name="status" class="form-control" id="status" list="suggestions4">
                                 <datalist id="suggestions4">
                                    <select class="form-control">
                                    <option selected="0">Masa Peminjaman</option>
                                    </select>
                            </datalist>
                                  </div>
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>  
            
          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('templates/footer'); ?>
