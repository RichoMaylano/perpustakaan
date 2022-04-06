<!DOCTYPE html>
<html lang="en">

<head>
<title>Login</title>

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
<body>
  <div class="container">

    <?php echo form_open('Login/auth'); ?>

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0 mx-auto">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="rotate img">
                <img style="width: 150px; height:150px;" src="https://seta.web.id/ts1/wp-content/uploads/2018/03/logo-ts-1.jpg">
              </div> -->
              <div class="col-lg mx-auto">
                <div class="p-5">
<center>                <img style="width: 150px; height:150px;" src="https://store.tigaserangkai.com/wp-content/uploads/2015/12/Logo-TS-depan.png">
</center>               <hr>  
                <!-- <div class="text-center">
                    <div class="h6 text-gray-900 mb-4">
                       -->
                    <!-- <h1 class="ml1">
                        <span class="text-wrapper">
                          <span class="letters">Login</span>
                        </span>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                      </h1> -->
                    <!-- </div>
                  </div>
                   -->
                  <?php echo $this->session->flashdata('msg_login'); ?>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" id="email" name="email" class="form-control form-control-user" placeholder="Enter Email" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Enter Password" required autofocus>
                    </div>
             <div class="form-group">
                      <input type="checkbox" id="remember" name="remember" class="" placeholder="" ><span>&nbsp Remember Me</span>
              </div>

                    <hr>
                    
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    <hr>
                    <center>
                    <a href="Login/register">Register Now</a>
  </center>
                   </form>
                 
                  </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

 </body>

 
<script>
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
</html>
 