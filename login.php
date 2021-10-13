<!doctype html>
<?php include "include/login_process.php";?>
<html class="no-js" lang="en">
    
<!-- Mirrored from boomchart.net/bitmine/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 23:22:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <base />
        <title>Login | Essone</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="Bitmine"/>
        <meta name="application-name" content="Bitmine"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="Bitmine platform is at your service with its user-friendly features, secure infrastructure and applications that make a difference." />
        <link rel="shortcut icon" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="asset/images/logo_1588143489.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="asset/images/logo_1588143489.png" />
        <link rel="stylesheet" href="asset/css/sweetalert.html" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,600,700&amp;display=swap">
        <link rel="stylesheet" href="asset/dashboard/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="asset/dashboard/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="asset/dashboard/css/argon9f1e.css?v=1.1.0" type="text/css">
        <link rel="stylesheet" href="asset/frontend/css/sweetalert.css" type="text/css">
             </head>
<!-- header begin-->
  <body class="bg-white">
    <!-- Navbar -->
    <?php include "form-header.php"; ?>
<!-- header end -->

<div class="main-content bg-dark" style="background-image:url('asset/frontend/img/bg-2.png');">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9" >
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Login</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="border-0 mb-0 bg-transparent">
            <div class="card-header bg-transparent pb-5">
              <div class="text-white text-center mt-2 mb-3">Sign in with credentials</div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
            <?php echo"$fail";?>
              <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="hidden" name="_token" value="Zjgi8hsU9toE0WMXU8A3uI3OmtsImiGvjaPW5UX6">                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-dark"><i class="ni ni-email-83"></i></span>
                    </div>
                     <label for="">Email</label>
                    <input class="form-control" placeholder="<?php echo"$email_err";?>" type="email" name="email">
                                      </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <label>Password</label>
                    <input class="form-control" placeholder="<?php echo"$password_err";?>" type="password" name="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-default my-4">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
             
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-white"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- footer begin -->
<!-- <?php include "footer.php" ?> -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to//default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
  <script src="asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
  <script src="asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="asset/dashboard/js/argon9f1e.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="asset/dashboard/js/demo.min.js"></script>
  <script src="asset/frontend/js/sweetalert.js"></script>
</body>


<!-- Mirrored from boomchart.net/bitmine/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 23:22:59 GMT -->
</html>

    <script>
    </script>
