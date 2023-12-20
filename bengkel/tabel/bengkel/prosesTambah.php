<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $Nama_Bengkel = $_POST['Nama_Bengkel'];
    $Alamat_Bengkel = $_POST['Alamat_Bengkel'];
    $Nomor_Telepon = $_POST['Nomor_Telepon'];
    $Email = $_POST['Email'];
    $Deskripsi_Bengkel = $_POST['Deskripsi_Bengkel'];
    $Jam_Operasional = $_POST['Jam_Operasional'];
    $tutup = $_POST['tutup'];
    $id_layanan = $_POST['id_layanan'];

    $gambar =  upload();
    if( !$gambar ) {
        return false;
    }
    
    $sql = mysqli_query($koneksi , "INSERT INTO bengkel SET
    
    nama = '$Nama_Bengkel',
    alamat = '$Alamat_Bengkel',
    noHp = '$Nomor_Telepon',
    email = '$Email',
    deskripsi = '$Deskripsi_Bengkel',
    buka = '$Jam_Operasional',
    tutup = '$tutup',
    foto = '$gambar',
    id_layanan = '$id_layanan'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../bengkel.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlrbih dahulu');
            </script>";

        return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    //     echo "<script>
    //         alert('bukan gambar yang anda uoload');
    //         </script>";

    //     return false;
    // }

    //cek ukuran file jika besar
    if ( $ukuranFIle > 2000000 ) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";

        return false;      
    }

    //lolos pengecekan, gambar siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'; 
    $namaFileBaru .= $ekstensiGambar; 

    move_uploaded_file($tmpName, '../../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}