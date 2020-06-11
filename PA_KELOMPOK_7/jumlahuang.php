<?php
    require_once 'koneksikeuangan.php';

    if(ISSET($_POST['add'])){
        $bulan = $_POST['bulan'];
        $Jumlah = $_POST['Jumlah'];
    
    mysql_query($database, "INSERT INTO 'keuangan' VALUES ('','$_bulan','$_Jumlah')");
    }

    header("location : keuangan.php");
?>