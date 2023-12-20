<?php 
require 'koneksi.php';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = mysqli_query($koneksi , "SELECT * FROM admin WHERE
  username = '$username' AND
  password = '$password' 
  ");
  $cek = mysqli_fetch_row($sql);

  if($cek > 0){
    $_SESSION['login'] = true;
    echo "
    <script>
    location = 'index.php'
    </script>
    ";
  }else{
    echo "
    <script>
    alert('Password Salah')
    location = 'login.php'
    </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'><link rel="stylesheet" href="assets/login/style.css">

</head>
<body style="background-color: rgb(13,17,23);">
<!-- partial:index.partial.html -->
<form class="login-form" action="" method="post">
  <h1>Login</h1>
  <div class="form-input-material">
    <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="username">Username</label>
  </div>
  <div class="form-input-material">
    <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
    <label for="password">Password</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary btn-ghost">Login</button>
</form>
<!-- partial -->
  
</body>
</html>
