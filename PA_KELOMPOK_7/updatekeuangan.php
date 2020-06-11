<?php 

require_once 'koneksikeuangan.php';
 
$id = $_POST['id'];
$bulan = $_POST['bulan'];
$Jumlah = $_POST['Jumlah'];

$ubah = ubahdata($id,$bulan,$Jumlah);
if($ubah>0){
    echo "
        <script>
            alert('selamat!! data anda telah di ubah');
            document.location.href = 'keuangan.php' 
        </script>
    ";
}
else{
    echo "
    <script>
        alert('gagal merubah data ');
        document.location.href = 'keuangan.php' 
    </script>
        ";
}

?>