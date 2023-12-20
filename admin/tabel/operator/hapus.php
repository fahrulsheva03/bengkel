<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM operator WHERE id_op = $id");

header('Location:../../operator.php ');