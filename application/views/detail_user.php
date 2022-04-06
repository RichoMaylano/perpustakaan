<?php $this->load->view('templates/header');?>
  <div class="container mt-3">

        <div class="card">
  <div class="card-header">
  
    <h3>Detail User</h3>


  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
<?php 
echo "<h2>".$users->nama ."</h2>"."<br>";
echo "Email : ".$users->email ."<br>";
echo "Password : ".$users->password ."<br>";
echo "Alamat : ".$users->alamat ."<br>";
echo "Telepon : ".$users->telepon ."<br>";
?>
<br>
<img style="width:150px;"src="<?php echo base_url('assets/foto/' . $users->foto);?>" />

</blockquote>
  </div>
</div>


            </div>
        </div>
    </div>

                                     
</div>

<?php $this->load->view('templates/footer');?>