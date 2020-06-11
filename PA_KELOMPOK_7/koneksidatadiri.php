<?php
session_start();
global $database ;
$database =  mysqli_connect('localhost', 'root', '' , 'del_cyber_club');

function ubahdata($id,$nama,$katasandi){
global $database ;
$ubah = "UPDATE anggota set username='$nama', katasandi='$katasandi' WHERE id_anggota='$id'";
mysqli_query($database,$ubah);
return mysqli_affected_rows($database);
}

function deletedata($id){
global $database ;  
mysqli_query($database,"DELETE FROM anggota where id_anggota='$id'");
}
?>


