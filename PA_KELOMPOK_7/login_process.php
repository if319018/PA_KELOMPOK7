<?php 
	session_start();
	include_once('functions.php');

	$username = $_POST['username'];
	$katasandi = $_POST['katasandi'];
	$database =  mysqli_connect('localhost', 'root', '' , 'del_cyber_club');
	$login =  mysqli_query($database,"select * from anggota where username='$username' and katasandi='$katasandi'");

	$cek = mysqli_num_rows($login);

	if($cek > 0){
		
		$data = mysqli_fetch_assoc($login);

		if($data['levell']=="admin"){
			$_SESSION['username'] = $username;
			$_SESSION['levell'] = "admin";
			redirect ('mainadmin.php');

		} else if($data['levell']=="anggota"){
			$_SESSION['username'] = $username;
			$_SESSION['levell'] = "anggota";
			redirect ('mainanggota.php');
		} else {
			redirect ('index.php');
		}
	}

