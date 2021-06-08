<html>
<style>	
h1 {
  color:white;
  font-size: 30px;
}
h2 {
  color:white;
  font-size: 20px;
}
</style>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="styleRegistrasi.css" />
</head>
<body bgcolor="#172238">
<?php
require('koneksi.php');
// Jika formulir dikirimkan, masukkan nilai ke dalam database.
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) 
		VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
			<br>
			<br>
			<center> <h1>Registrasi Berhasil</h1>
<br/><h2>Klik disini untuk <a href='login.php'>Login</a></h2></center></div>";
        }
    }else{
?>

<br><br><br><br><br><br>
<table align="center">
<tr>
	<th align="center"colspan="2">Registrasi</th>
</tr>
<form name="registration" action="" method="post">
<tr>
	<td>Username</td><td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
	<td>Password</td><td><input type="password" name="password" placeholder="Password" required /></td>
</tr>
<tr>
	<td>email</td><td><input type="email" name="email" placeholder="Email" required /></td>
</tr>
<tr>
	<td></td>
	<td><center><input type="submit" name="submit" value="Register" /> </center>
	<br>
	<a href="index.php" type="button" > Kembali </a></td>
</tr>
</form>
<?php } ?>
</body>
</html>
