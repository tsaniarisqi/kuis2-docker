<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style >
		body{
	background: url('cap.jpg');
	background-repeat: no-repeat;
	background-size: 100%;
}
.text{
	margin-top: 30px;
}
.button1{
	padding: 10px 30px;
	border-radius: 20px;
	margin-top: 0px;
	cursor: pointer;
	background: -webkit-linear-gradient(right,#FFEB00,#FFCC00);
	color: black;
	font-weight: bold;
	font-size: 18px;
	margin-left: 10px;
}
.button{
	background: -webkit-linear-gradient(right,#FFEB00,#FFCC00);
}
.card{
	margin-top: 30px;
}
.underline{
	background: -webkit-linear-gradient(right,#FFEB00,#FFCC00);
}
.error{
	color: red;
}
	</style>
</head>
<body>
	<?php
	if (isset($_POST['error'])) {
		$error=$_POST['error'];
	} else {
		$error="";
	}

	$pesan="";
	if ($error=="password_salah") {
		$pesan="Username/Password salah";
	} 

	if (isset($_POST['username']) AND isset($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
	} else {
		$username="";
		$password="";
	}
	
	?>
	<span class="error"><?php echo $pesan;?></span>
	<p align="left"><a href="index.html"><input type="submit" value="Back" class="button1"></a></p>
	<center><h1 class="text">UNOFFICIAL WEBSITE</h1></center>
	<
<div class="card">
	<div class="card1">
		<div class="card2">
			<h2>LOGIN</h2>
			<div class="underline"></div>
		</div>
	</div>
	<form method="post" action="loginProses.php">
		<p><label><img src="user.png" class="user"></label>
		<input type="text" name="username" class="form_login1" placeholder="Username" value="<?php echo $username;?>"></p>
		<p><label><img src="password.png" class="pss"></label>
		<input type="password" name="password" class="form_login2" placeholder="Password" value="<?php echo $password;?>"></p>
		<input type="submit" class="button" value="Login">

	</form>
</div>
</div>
</body>
</html>