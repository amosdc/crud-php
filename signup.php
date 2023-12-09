<?php
require 'koneksi.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO users VALUES('','$username','$password', 'user')";
      mysqli_query($con, $query);
      echo
      "<script> alert('Akun Kamu Berhasil Didaftar!'); </script>";
      ?>

      <meta http-equiv="refresh" content="0; url=login.php" />

      <?php
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="row">

      <div class="col1">
        <img src="img/gambar-login.png" alt="">
      </div>

      <div class="col2">
         <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <input type="text" name="username" id = "username" placeholder = " Username"> <br>
      <input type="password" name="password" id = "password" placeholder = " Password"> <br>
      <input type="password" name="confirmpassword" id = "confirmpassword" placeholder = " Confirm Password"> <br>
      <button type="submit" name="submit">Sign Up</button>
    </form> 
    <br>
    <a href="login.php">Login</a>
      </div>
    </div>
   
  </body>
</html>