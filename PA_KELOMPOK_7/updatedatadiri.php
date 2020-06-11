<?php 

require_once 'koneksidatadiri.php';
 
$id = $_POST['id'];
$nama = $_POST['username'];
$katasandi = $_POST['katasandi'];

$ubah = ubahdata($id,$nama,$katasandi);
if($ubah>0){
    echo "
        <script>
            alert('selamat!! data anda telah di ubah');
            document.location.href = 'mainanggota.php' 
        </script>
    ";
}
else{
    echo "
    <script>
        alert('gagal merubah data ');
        document.location.href = 'mainanggota.php' 
    </script>
        ";
}

?>