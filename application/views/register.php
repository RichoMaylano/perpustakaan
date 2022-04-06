<!DOCTYPE html>
<html lang="en">

<head>

<link rel="shortcut icon" href="https://store.tigaserangkai.com/wp-content/uploads/2015/12/Logo-TS-depan-1.png">
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }

    .rotate img {
      -webkit-transition: -webkit-transform 1.1s ease-in-out;
      transition: transform 1.1s ease-in-out;
      width : 150px;
      margin-top : 30%;
      margin-bottom : 10%;
    }

    .rotate img:hover {
      -webkit-transform: rotate(360deg);
      transform: rotateY(360deg);
    }

    @media (max-width: 1024px){
      .rotate img{
        width:150px;
        margin-left:65%;
        margin-right:0%;
      }
    }

    @media (max-width: 800px){
      .rotate img{
        width:150px;
        /* margin-left:150%;
        margin-right:150%; */
      }
    }

    @media (max-width: 768px){
      .rotate img{
        width:100px;
        /* margin-left:150%;
        margin-right:150%; */
      }
    }



    .back {
      position: fixed;
      top: 5px;
      left: 10px;
    }

    .logout {
      position: fixed;
      top: 8px;
      right: 10px;
    }

    .copyright {
      position: fixed;
      right: 650px;
      bottom: 5px;
    }

    .ml1 {
  font-weight: 450;
  font-size: 1.5em;
}

.ml1 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml1 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml1 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #fff;
  transform-origin: 0 0;
}

.ml1 .line1 { top: 0; }
.ml1 .line2 { bottom: 0; }

  </style>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<title>Register Admin</title>

<body>

	<!-- Check Login -->

    <!-- Check Login END -->
		
    
    <div class="container">

        <?php echo form_open('Login/register'); ?>
        <?php echo validation_errors(); ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                    </div>
                                    <form class="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama..." required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email.." required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat..." required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" min="0" class="form-control" name="telepon" placeholder="Masukkan Telepon..." required autofocus>
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                                        
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                        
 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

 </body>