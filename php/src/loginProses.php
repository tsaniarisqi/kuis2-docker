
<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=md5($_POST['password']);
// $isi_form="&username=$username&password=$password";

$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect,$query);
$cek=mysqli_num_rows($result);

if ($cek) {
	header("Location: pageHome.html");
} else {
	header("Location: loginPage.html?error=password_salah");
}
?>

