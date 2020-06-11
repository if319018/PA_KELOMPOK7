<?php 

require_once 'koneksianggota.php';
 
$id = $_POST['id'];
$nim = $_POST['NIM'];
$nama = $_POST['username'];
$katasandi = $_POST['katasandi'];
$status = $_POST['status_anggota'];

$ubah = ubahdata($id,$nim,$nama,$katasandi,$status);
if($ubah>0){
    echo "
        <script>
            alert('selamat!! data anda telah di ubah');
            document.location.href = 'anggota.php' 
        </script>
    ";
}
else{
    echo "
    <script>
        alert('gagal merubah data ');
        document.location.href = 'anggota.php' 
    </script>
        ";
}

?>