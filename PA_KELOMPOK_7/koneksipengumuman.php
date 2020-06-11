<?php
session_start();
global $database ;
$database =  mysqli_connect('localhost', 'root', '' , 'del_cyber_club');

function ubahdata($id,$judul,$deskripsi,$tanggal_terbit){
global $database ;
$ubah = "UPDATE pengumuman set judul='$judul', deskripsi='$deskripsi' tanggal_terbit='$tanggal_terbit' WHERE id_pengumuman='$id'";
mysqli_query($database,$ubah);
return mysqli_affected_rows($database);
}

function deletedata($id){
global $database ;  
mysqli_query($database,"DELETE FROM pengumuman where id_pengumuman='$id'");
return mysqli_affected_rows($database);
}


?>


