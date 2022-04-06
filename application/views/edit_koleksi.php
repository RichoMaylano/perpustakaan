<?php $this->load->view('templates/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
            <form action="edit_koleksi_proses" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input value ="<?php echo htmlspecialchars($koleksi->nama_buku); ?>" type="text" name="nama_buku" class="form-control" id="nama_buku">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input value ="<?php echo htmlspecialchars($koleksi->pengarang); ?>"type="text" name="pengarang" class="form-control" id="pengarang">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Tahun Terbit</label>
                                    <input value ="<?php echo htmlspecialchars($koleksi->tahun); ?>" type="date" name="tahun" class="form-control" id="tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input value ="<?php echo htmlspecialchars($koleksi->cover); ?>"type="file" name="cover" class="form-control" id="cover">
                                </div>
                                <input type="hidden" name="id_buku" id="id_buku" value=<?php echo htmlspecialchars($koleksi->id_buku); ?>>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>  
            
          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 


            <!-- <form action="edit_koleksi_proses" method="post" enctype="multipart/form-data">
                 
                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        Judul Buku :
                    </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input class="form-control form-control-user" placeholder="Nama Buku..." name="nama_buku" id="nama_buku" type="text" value="<?php echo htmlspecialchars($koleksi->nama_buku); ?>" required autofocus />                
                     </div>
                    </div>

                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            Pengarang :
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input value ="<?php echo htmlspecialchars($koleksi->pengarang); ?>" class="form-control form-control-user" placeholder="Nama Pengarang..." name="pengarang" id="pengarang" type="text" required autofocus  />
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            Tahun :
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input class="form-control form-control-user" placeholder="Tahun Buku..." name="tahun" id="tahun" type="date" value="<?php echo htmlspecialchars($koleksi->tahun); ?>" />
                    </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            Cover :
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                            

                        <input class=""  name="cover" id="cover" type="file" value="" />

                    </div>
                    </div>
<div class="form-group row">
<div class="col-sm-7">
</div>
<div class="col-sm-3">
</div>

<div class="col-sm-2">
    <input type="hidden" name="id_buku" id="id_buku" value=<?php echo htmlspecialchars($koleksi->id_buku); ?>>
<button type="submit" class="btn btn-primary">Update</button>
</div>

                </div>
                
                </form>
            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
 -->

<?php $this->load->view('templates/footer'); ?>