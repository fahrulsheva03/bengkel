<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $ID_Pengguna = $_POST['id'];
    $Nama_Pengguna = $_POST['Nama_Pengguna'];
    $Email_Pengguna = $_POST['Email_Pengguna'];
    $password_pengguna = $_POST['password_pengguna'];
    $username = $_POST['username'];
    
    $sql = mysqli_query($koneksi , "UPDATE user SET

    nama = '$Nama_Pengguna',
    email = '$Email_Pengguna',
    password = '$password_pengguna',
    username = '$username'

    WHERE
    id_user = $ID_Pengguna

    ");

if($sql){
    header('Location:../../pengguna.php ');
}else{
}
}