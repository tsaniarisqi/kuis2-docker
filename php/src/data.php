<!DOCTYPE html>
<html>
<head>
	<title>Proses Input</title>
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

$nisn=$_GET['nisn'];
$nama=$_GET['nama'];
$tgl_lahir=$_GET['tgl_lahir'];
$jenis_kelamin=$_GET['jenis_kelamin'];
$alamat=$_GET['alamat'];
$no_telp=$_GET['no_telp'];

$sql="INSERT INTO siswa (nisn,nama,tgl_lahir,jenis_kelamin,alamat,no_telp)
	VALUES('$nisn','$nama','$tgl_lahir','$jenis_kelamin','$alamat','$no_telp')";
	 if (mysqli_query($connect, $sql)){
        echo "Data berhasil ditambahkan";?>
        <a href="homeCRUD.php"><br><input type="submit" class="button" value="View"></p></a>
        <?php
    }else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);?>
        <a href="inputData.php"><br><input type="submit" class="button" value="Back"></a>
        <?php
    }

    mysqli_close($connect);

?>
</div>
</body>
</html>