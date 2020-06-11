<?php
session_start();
global $database ;
$database =  mysqli_connect('localhost', 'root', '' , 'del_cyber_club');

function ubahdata($id,$bulan,$Jumlah){
global $database ;
$ubah = "UPDATE keuangan set bulan='$bulan', Jumlah='$Jumlah' WHERE id_keuangan='$id'";
mysqli_query($database,$ubah);
return mysqli_affected_rows($database);
}

function deletedata($id){
global $database ;  
mysqli_query($database,"DELETE FROM keuangan where id_keuangan='$id'");
return mysqli_affected_rows($database);
}


?>


