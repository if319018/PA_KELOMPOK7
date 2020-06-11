<?php 
	session_start();
	include_once('functions.php');
	if (isset($_SESSION['is_logged_in'])){
		redirect('mainadmin.php');
	}
	open_page('login');

 ?>


<html>

<head>

  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                <center><img src="logo.jpg" height="100px" width="100px">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                  </div>
                  <form class="user" action="login_process.php" method="post" >
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan nama"
                    required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="katasandi" placeholder="Password"
                      required>

                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                      
                      </div>
                    </div>
                    <input type="submit" name="action" value="Login"  class="btn btn-primary btn-user btn-block" >
                    <center><a href="register.php">Belum punya akun? Registrasi now!</a>
                    </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  
  <s3996ipt src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php close_page(); ?>
