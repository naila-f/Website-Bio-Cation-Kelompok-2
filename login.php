<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="styleRegistrasi.css" />
</head>
<body bgcolor="#172238">
<?php
require('koneksi.php');
session_start();
// Jika formulir dikirimkan, masukkan nilai ke dalam database.
if (isset($_POST['username'])){
	$username = ($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = ($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Memeriksa apakah pengguna ada di database atau tidak
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
    // Redirect user ke beranda.php
	    header("Location: beranda.php");
         }else{
	echo "<div class='form'>
<h3>Username/password Salah.</h3>
<br/>Klik Disini <a href='login.php'>Login</a></div>";
	}
    }else{
?>

<br><br><br><br><br><br>
<table align="center">
	<th align="center">LOGIN</th>
<form action="" method="post" name="login">
<tr>
	<td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="Password" required /></td></tr>
<tr>
	<td>	<center> <input type="submit" class="btn btn-outline-primary" name="submit" value="Login" style="background-color: dimgray;" /> </center>
	<br>
	<input name="reset" type="reset" value="Reset" style="background-color: dimgray;"/>
	<a href="index.php" type="button" > Kembali </a></td>
</tr>
</form>
</div>
<?php } ?>
</html>