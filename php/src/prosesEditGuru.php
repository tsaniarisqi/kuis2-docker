<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Guru</title>
	<style>
		*, *::before, *::after{
	box-sizing: border-box;
}
body{
	font-family: sans-serif;
	font-size: 1em;
	color: #333;
	background: url('cap.jpg');
	background-repeat: no-repeat;
	background-size: 100%;
}
.button{
	padding: 5px 10px;
	border-radius: 20px;
	margin-top: 15px;
	cursor: pointer;
	background: -webkit-linear-gradient(right,#FFEB00,#FFCC00);
	color: black;
	font-size: 18px;
	margin-left: 250px;
}
.box{
	background: #fbfbfb;
	border-radius: 5px;
	box-shadow: 1px 2px 8px rgba(0,0,0,0.65);
	height: 150px;
	margin-top: 250px;
	margin-right: auto;
	margin-bottom: 80px;
	margin-left: 580px;
	width: 400px;
	border: none;
	padding: 60px;
	font-size: 20px;
	text-align: center;
}

	</style>
</head>
<body>
	<div class="box">
<?php
	include 'koneksi.php';

	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$tgl_lahir=$_POST['tgl_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_telp=$_POST['no_telp'];
	$materi=$_POST['materi'];

	$query="UPDATE guru SET nama='$nama', tgl_lahir='$tgl_lahir', 
	jenis_kelamin='$jenis_kelamin',
	alamat='$alamat',
	no_telp='$no_telp',
	materi='$materi'
	WHERE nip='$nip'";
	$result=mysqli_query($connect,$query);

	if ($result) {
		echo "Berhasil update data";
?>
	<a href="crudGuru.php"><br><input type="submit" class="button" value="View"></p></a>
	<?php
} else{
	echo "Gagal update data".mysqli_error($connect);?>
	<a href="crudGuru.php"><br><input type="submit" class="button" value="Back"></a>
	<?php
}
?>
</div>
</body>
</html>