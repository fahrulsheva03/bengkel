<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $Nama_Pengguna = $_POST['Nama_Pengguna'];
    $Email_Pengguna = $_POST['Email_Pengguna'];
    $password_pengguna = $_POST['password_pengguna'];
    $username = $_POST['username'];

    $sql = mysqli_query($koneksi , "INSERT INTO user SET
    
    nama = '$Nama_Pengguna',
    email = '$Email_Pengguna',
    password = '$password_pengguna',
    username = '$username'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../pengguna.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}