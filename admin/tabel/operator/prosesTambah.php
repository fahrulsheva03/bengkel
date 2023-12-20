<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi , "INSERT INTO operator SET
    
    password = '$password',
    username = '$username'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../operator.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}