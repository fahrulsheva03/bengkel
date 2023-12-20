<?php
// Menginclude Koneksi agar bisa terkoneksi pada Database	
include 'koneksi.php';

// Mengeceka apakah User telah mengklik tombol Registrasi
if(isset($_POST['register'])){

    // Data User diambil melalui Method POST
    $nama_user = $_POST['nama'];
    $email_user = $_POST['email'];
    $username_user= $_POST['username'];
    $password_user = $_POST['password'];
    
    
    // Data yang suda di ambil di masukan ke dalam Database Melalui Fungsi Mysqli
    $insert = mysqli_query($koneksi, "INSERT INTO user SET 
	nama='$nama_user', 
	email='$email_user', 
	username= '$username_user',
	password = '$password_user' " );

// Jika Data Sudah di isi dengan tepat, maka akan di arahkan ke tampilan Login
if ($insert){
    echo '<script>
    alert("Registrasi Berhasil")
    document.location.href="login.php"
    </script>';
}

// Jika Gagal maka akan kembali ke tampilan Registrasi
else{
    echo '<script>
    alert("Registrasi Gagal!!")
    </script>';
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="users/login/style.css">

</head>

<body style="background-color: rgb(13,17,23);">

    <!-- partial:index.partial.html -->
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Sign Up</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">

            <div class="form-inner">
                <form action="#" class="signup" method="post">
                    <div class="field">
                        <input type="text" name="nama" placeholder="Full Name" required>
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="register" value="Continue">
                    </div>
                    <div class="signup-link">Already have an account? <a href="login.php">Login</a></div>
                </form>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="users/login/script.js"></script>

</body>

</html>