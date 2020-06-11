<?php 
	session_start();
	include_once('functions.php');
	if(!isset($_SESSION['is_logged_in'])){
		redirect('index.php');
	}

	$NIM = $_POST['NIM'];
	$prodi = $_POST['prodi'];
	$Motivasi = $_POST['Motivasi'];
	$username = $_POST['username'];
	$katasandi = $_POST['katasandi'];
	$levell = $_POST['levell'];

	$database = new mysqli('127.0.0.1', 'root', '', 'del_cyber_club');

	$query = 'INSERT INTO anggota(NIM,prodi,Motivasi,username,katasandi,levell) VALUES (?,?,?,?,?,?)';

	$statement = $database->prepare($query);
	$statement->bind_param('isssss', $NIM,$prodi,$Motivasi,$username,$katasandi,$levell);
	$statement->execute();
	$statement->close();

	redirect('index.php');
 ?>