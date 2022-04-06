<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI3</title>
      <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <link rel ="icon" href="https://store.tigaserangkai.com/wp-content/uploads/2015/12/Logo-TS-depan-1.png" />
    <style>

         .wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
}

.profile {
    position: relative;
    width: 300px;
    height: 350px;
    background: url("https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-size: cover;
    cursor: pointer;
    border: 12px;
    border-top-right-radius: 35px !important;
    border-radius: 6px
}

.profile2 {
    position: relative;
    width: 300px;
    height: 350px;
    background: url("https://www.opticalexpress.co.uk/media/1064/man-with-glasses-smiling-looking-into-distance.jpg");
    background-size: cover;
    cursor: pointer;
    border: 12px;
    border-top-right-radius: 35px !important;
    border-radius: 6px
}

.profile3 {
    position: relative;
    width: 300px;
    height: 350px;
    background: url("https://i.pinimg.com/originals/87/09/28/870928571bb8120f20153658ad35f8a8.jpg");
    background-size: cover;
    cursor: pointer;
    border: 12px;
    border-top-right-radius: 35px !important;
    border-radius: 6px
}

.overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    border-radius: 12px;
    cursor: pointer;
    opacity: 0;
    transition: all 1s;
    border-top-right-radius: 35px !important;
    border-radius: 6px
}

.profile2:hover .overlay {
    opacity: 1
}

.profile:hover .overlay {
    opacity: 1
}

.profile3:hover .overlay {
    opacity: 1
}

.social-icons {
    display: flex;
    list-style: none;
    bottom: 10px;
    position: absolute;
    text-align: center;
    justify-content: center;
    left: 22px
}

.social-icons li {
    width: 25px;
    height: 25px;
    border: 1px solid #eee;
    padding: 20px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    border-radius: 5px;
    transition: all 1s
}

.social-icons li:hover {
    background: #fff;
    color: #000
}

.overlay .about {
    position: relative;
    justify-content: center;
    align-items: center;
    display: flex;
    top: 40%;
    color: #fff;
    flex: column
}


footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
      </style>
      </style>
</head>

<body>

<?php
if ($this->session->userdata('nama') == '') {
    echo '<script>alert("Mohon Login Terlebih Dahulu.");
        window.location.href="' . base_url('login') . '";</script>';
}
?>


              <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="https://store.tigaserangkai.com/wp-content/uploads/2015/12/Logo-TS-depan-1.png" width="50px" height="50px"></a>
            <span>Halo, <?php echo $this->session->userdata('nama') ?>!</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  
                    <a class="nav-link active"  href="<?= base_url('Dashboard/dashboard') ?>">Dashboard</a>
                    <a class="nav-link"  href="<?= base_url('user') ?>">User</a>
                    <a class="nav-link"  href="<?= base_url('koleksi') ?>">Koleksi</a>
                    <a class="nav-link"  href="<?= base_url('pinjam') ?>">Peminjaman</a>
                   
                    
     
                      <div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="icon-user"></i>&nbsp Profile
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li> <a class="dropdown-item" href="<?= base_url('about') ?>" style="color:black;">About</a></li>
            <li><a class="dropdown-item" href="<?= base_url('contact') ?>" style="color:black;">Contact</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>Login/logout"  style="color:black;"><i class="icon-signout"></i> &nbspLogout</a></li>
  </ul>
</div>

                </div>
            </div>
        </nav>