<?php
    require_once('koneksianggota.php');
    $id=$_GET['id'];
    $hapus = deletedata($id);

    if ($hapus>0){
        echo "
        <script>
            alert('Data di hapus');
            document.location.href = 'anggota.php' 
            </script>
    ";
    }
    else{
        echo "
        <script>
            alert('gagal menghapus');
            document.location.href = 'anggota.php' 
            </script>
    ";
    }
?>