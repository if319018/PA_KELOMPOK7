<?php 
	session_start();
	include_once('functions.php');

	//hanya untuk session
	if(isset($_SESSION['is_logged_in'])){
		unset($_SESSION['is_logged_in']);
	}
	session_destroy();

	header('location: index.php');
 ?>