<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
 
	
 
	<div class="row">
        <div class="col1">
            <img src="img/gambar-login.png" alt="">
        </div>

        <div class="col2">
        <h2>Login</h2>
        <form class="" action="cek_login.php" method="post" autocomplete="off">
          <input type="text" name="username" class="form_login" placeholder="Username .." required="required"> <br>
          <input type="password" name="password" class="form_login" placeholder="Password .." required="required"> <br>
          
		  <input type="submit" class="tombol_login" value="Login">
        </form>
        <br>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>
 
 
</body>
</html>