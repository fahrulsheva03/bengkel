<?php
// Untuk memanggil fungsi koneksi
include 'koneksi.php';

if(isset($_SESSION['login'])){
  echo "
    <script>
        alert('Anda Sudah Login');
        document.location.href='index.php';
    </script>";


}

// Mengecek apakah user menekan Tombol login

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin")
    {
      // Mengecek apakah username dan password sudah sesuai dengan Menggunakan Fungsi Mysqli_query
    $data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password ='$password'");
    $cek = mysqli_num_rows($data);

    
    // Jika Sudah, maka  di arahkan ke tampilan Utama
    if($cek == 1){
      $_SESSION['login'] = true;
      
        echo "
    <script>
        alert('Login Berhasil');
        document.location.href='admin/index.php';
    </script>";
    }
        // Jika Gagal, maka akan kembali ke Halaman Login
	
	else{
        echo "
    <script>
        alert('Login Gagal');
        window.history.back();
    </script>";
    }

    }
    elseif($username == "operator")
    {
      // Mengecek apakah username dan password sudah sesuai dengan Menggunakan Fungsi Mysqli_query
    $data = mysqli_query($koneksi,"SELECT * FROM operator WHERE username='$username' AND password ='$password'");
    $cek = mysqli_num_rows($data);

    
    // Jika Sudah, maka  di arahkan ke tampilan Utama
    if($cek == 1){
      $akun = mysqli_fetch_assoc($data);
      $_SESSION['login'] = true;
      $_SESSION["operator"] = $akun;
      
        echo "
    <script>
        alert('Login Berhasil');
        document.location.href='bengkel/index.php';
    </script>";
    }
        // Jika Gagal, maka akan kembali ke Halaman Login
	
	else{
        echo "
    <script>
        alert('Login Gagal');
        window.history.back();
    </script>";
    }
    
    }
    else
    {
      // Mengecek apakah username dan password sudah sesuai dengan Menggunakan Fungsi Mysqli_query
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password ='$password'");
    $cek = mysqli_num_rows($data);

    
    // Jika Sudah, maka  di arahkan ke tampilan Utama
    if($cek == 1){
      $akun = mysqli_fetch_assoc($data);
      $_SESSION['login'] = true;
      $_SESSION["user"] = $akun;
      
        echo "
    <script>
        alert('Login User Berhasil');
        document.location.href='index.php';
    </script>";
    }
        // Jika Gagal, maka akan kembali ke Halaman Login
	
	else{
        echo "
    <script>
        alert('Login Gagal');
        window.history.back();
    </script>";
    }

    }
    
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="users/login/style.css">

</head>

<body style="background-color: rgb(13,17,23);">

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="form-inner">

                <form action="#" class="login" method="post">
                    <div class="field">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login" value="Continue">
                    </div>
                    <div class="signup-link">Don't have an account? <a href="registrasi.php">Sign Up</a></div>
                </form>

            </div>
        </div>
    </div>

    <script src="users/login/script.js"></script>

</body>

</html>