<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM bengkel WHERE id = $id");

header('Location:../../bengkel.php ');