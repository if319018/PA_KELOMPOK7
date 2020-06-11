<?php 
	session_start();
	include_once('functions.php');
	if(!isset($_SESSION['is_logged_in'])){
		redirect('pengumuman.php');
	}

	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal_terbit = $_POST['tanggal_terbit'];


	$database = new mysqli('127.0.0.1', 'root', '', 'del_cyber_club');

	$query = 'INSERT INTO pengumuman(judul,deskripsi,tanggal_terbit) VALUES (?,?,?)';

	$statement = $database->prepare($query);
	$statement->bind_param('ssi', $judul,$deskripsi,$tanggal_terbit);
	$statement->execute();
	$statement->close();

	redirect('pengumuman.php');
 ?>