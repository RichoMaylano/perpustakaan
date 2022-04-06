<?php $this->load->view('templates/header'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
             <form action="tambah_koleksi_proses" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="nama_buku" class="form-control" id="nama_buku">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" name="pengarang" class="form-control" id="pengarang">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Tahun Terbit</label>
                                    <input type="date" name="tahun" class="form-control" id="tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="cover" class="form-label">Cover</label>
                                    <input type="file" name="cover" class="form-control" id="cover">
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