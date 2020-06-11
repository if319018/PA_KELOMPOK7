<html>
<head>
	<title>edit</title>
</head>
<body>
	<h3>EDIT DATA </h3>
 
	<?php
    mysql_connect('localhost', 'root', '' );
    mysql_select_db('del_cyber_club');
	$id = $_GET['id'];
	$data = mysql_query("SELECT * from anggota where id_anggota='$id'");
	while($d = mysql_fetch_array($data)){
		?>
		<form method="post" action="updateanggota.php">
			<table>
				<tr>			
					<td>
						<input type="hidden" name="id" value="<?= $_GET['id']; ?>">
					</td>
				</tr>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="text" name="NIM" value="<?php echo $d['NIM']; ?>">
					</td>
				</tr>
				<tr>
					<td>katasandi</td>
					<td><input type="text" name="katasandi" value="<?php echo $d['katasandi']; ?>"></td>
				</tr>
                <tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>status</td>
					<td><input type="text" name="status_anggota" value="<?php echo $d['status_anggota']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
    ?>
    	<a href="anggota.php">KEMBALI</a>
 
</body>
</html>