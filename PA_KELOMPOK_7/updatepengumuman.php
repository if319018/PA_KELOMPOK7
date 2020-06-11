<?php 

require_once 'koneksipengumuman.php';
 
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal_terbit = $_POST['tanggal_terbit'];

$ubah = ubahdata($id,$judul,$deskripsi,$tanggal_terbit);
if($ubah>0){
    echo "
        <script>
            alert('selamat!! data anda telah di ubah');
            document.location.href = 'pengumuman.php' 
        </script>
    ";
}
else{
    echo "
    <script>
        alert('gagal merubah data ');
        document.location.href = 'pengumuman.php' 
    </script>
        ";
}

?>