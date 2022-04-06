<?php $this->load->view('templates/header');?>
  <div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
    <h3>Detail Buku</h3>


  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
<?php 
echo "<h2>".$koleksi->nama_buku ."</h2>"."<br>";
echo "Nama Pengarang : ".$koleksi->pengarang ."<br>";
echo "Tahun Terbit : ".$koleksi->tahun ."<br>";
?>

<img style="width:150px;"src="<?php echo base_url('assets/cover/' . $koleksi->cover);?>" />

</blockquote>
  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>

<?php $this->load->view('templates/footer');?>