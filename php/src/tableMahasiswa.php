<?php
	$namaHost="localhost";
	$username="root";
	$password="";
	$database="data_akademik";

	$connect=mysqli_connect($namaHost,$username,$password,$database);

	if ($connect) {
		echo "Koneksi dengan MySQL berhasil<br>";
	} else {
		echo "Koneksi dengan MySQL gagal".mysqli_connect_error();
	}

	$sql="CREATE TABLE mahasiswa(
	nim int primary key,
	nama varchar(50) not null,
	jenis_kelamin char(1) not null,
	tgl_lahir date not null,
	alamat varchar(50) not null,
	no_telp varchar(12)not null)";
	if (mysqli_query($connect,$sql)) {
		echo "Tabel mahasiswa berhasil dibuat";
	} else {
		echo "Tabel mahasiswa gagal dibuat<br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
?>