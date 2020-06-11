<?php 
	session_start();
	include_once('functions.php');
	open_page('register');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <center><div class="container">
    <div class="card col-md-6 o-hidden shadow-lg my-5">
      <div class="card-body p-1">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-md-6 "> -->
            <div class="p-5">
              <div class="text-center">
              <center><img src="logo.jpg" height="100px" width="100px">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="register_process.php" method="post">
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="NIM" placeholder="Masukkan NIM">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="prodi" placeholder="prodi">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="katasandi" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="Motivasi" placeholder="Motivasi">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="levell" value="anggota"> 
                </div>
               
                <input type="submit" value="ok" name="action" class="btn btn-primary btn-user btn-block">
                
                </form>
              <div class="text-center">
                <a class="small" href="index.php">Akun sudah ada? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php 
 close_page();
  ?>
