<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $Nama_Layanan = $_POST['Nama_Layanan'];
    $Harga_Layanan = $_POST['Harga_Layanan'];
   
    $sql = mysqli_query($koneksi , "INSERT INTO layanan SET
    
    nama_layanan = '$Nama_Layanan',
    harga = '$Harga_Layanan'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../layanan.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}