<?php 
	session_start();
	include_once('functions.php');
	if(!isset($_SESSION['is_logged_in'])){
		redirect('keuangan.php');
	}

	$bulan = $_POST['bulan'];
	$Jumlah = $_POST['Jumlah'];

	$database = new mysqli('127.0.0.1', 'root', '', 'del_cyber_club');

	$query = 'INSERT INTO keuangan(bulan,Jumlah) VALUES (?,?)';

	$statement = $database->prepare($query);
	$statement->bind_param('si', $bulan,$Jumlah);
	$statement->execute();
	$statement->close();

	redirect('keuangan.php');
 ?>