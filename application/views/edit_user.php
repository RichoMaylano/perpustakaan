<?php $this->load->view('templates/header'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
            <form action="edit_user_proses" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input value ="<?php echo htmlspecialchars($users->nama); ?>" type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input value ="<?php echo htmlspecialchars($users->email); ?>"type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input value ="<?php echo htmlspecialchars($users->password); ?>" type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input value ="<?php echo htmlspecialchars($users->alamat); ?>"type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input value ="<?php echo htmlspecialchars($users->telepon); ?>"type="number" min="0" name="telepon" class="form-control" id="telepon">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input value ="<?php echo htmlspecialchars($users->foto); ?>"type="file" name="foto" class="form-control" id="foto">
                                </div>
                                <input type="hidden" name="id" id="id" value=<?php echo htmlspecialchars($users->id); ?>>
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