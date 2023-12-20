<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    
    $sql = mysqli_query($koneksi , "UPDATE layanan SET
    nama_layanan = '$nama',
    harga = '$harga'
   
    WHERE
    id_layanan = $id

    ");

    if($sql){
    echo "
    <script>
    alert('Berhasil')
    location = '../../layanan.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Gagal')
    location = '../../layanan.php';
    </script>
    ";
}
}

