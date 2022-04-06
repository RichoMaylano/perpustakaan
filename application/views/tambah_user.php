<?php $this->load->view('templates/header'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
             <form action="tambah_user_proses" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="Nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="number" min="0" name="telepon" class="form-control" id="telepon">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" min="0" name="foto" class="form-control" id="foto">
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

<!-- 
<div class="container mt-3">

        <div class="card">
  <div class="card-header">
  <h3>Tambah User</h3>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <form action="tambah_user_proses" method="post" enctype="multipart/form-data">
                 
                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        Nama :
                    </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input class="form-control form-control-user" placeholder="Masukkan Nama..." name="nama" id="nama" type="text" value="" required autofocus />                
                     </div>
                    </div>

                   
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                           Email :
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input class="form-control form-control-user" placeholder="Masukkan Email..." name="email" id="email" type="email" required autofocus  />
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            Telepon :
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                        <input class="form-control form-control-user" placeholder="Masukkan No Telp..." name="telepon" id="telepon" type="number" min="0" value="" />
                    </div>
                    </div>
<div class="form-group row">

<div class="col-sm-7">
</div>
<div class="col-sm-3">
</div>

<div class="col-sm-2">
<button type="submit" class="btn btn-success">Tambah</button>
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