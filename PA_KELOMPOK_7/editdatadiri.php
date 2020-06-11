<h3>EDIT DATA </h3>


<?php
 session_start();
 mysql_connect('localhost', 'root', '' );
 mysql_select_db('del_cyber_club');
 $data = mysql_query("SELECT * from anggota ");
 while ($akun = mysql_fetch_array($data)){
   if($akun['username'] === $_SESSION['username']){

   ?>
   <form method="post" action="updatedatadiri.php">
     <table>
       <tr>			
         <td>
           <input type="hidden" name="id" value="<?= $akun['id_anggota']; ?>">
         </td>
       </tr>
       <tr>
         <td>katasandi</td>
         <td><input type="text" name="katasandi" value="<?php echo $akun['katasandi']; ?>"></td>
       </tr>
        <tr>
         <td>username</td>
         <td><input type="text" name="username" value="<?php echo $akun['username']; ?>"></td>
       </tr>
       <tr>
         <td></td>
         <td><input type="submit" name="submit" value="SIMPAN"></td>
       </tr>		
     </table>
   </form>
   <?php 
 }
}
   ?>
     <a href="mainanggota.php">KEMBALI</a>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    
 

 

  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
