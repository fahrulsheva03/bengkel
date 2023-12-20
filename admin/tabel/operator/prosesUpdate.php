<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($koneksi , "UPDATE operator SET

    password = '$password',
    username = '$username'

    WHERE
    id_op = $id

    ");

if($sql){
    header('Location:../../operator.php ');
}else{
}
}