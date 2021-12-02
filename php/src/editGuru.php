<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Guru</title>
	<link rel="stylesheet" type="text/css" href="editGNew.css">
</head>
<body>
	<div class="kotak">
		<div class="card1">
		<div class="card2">
			<h2>Edit Data Guru </h2>
			<div class="underline"></div>
		</div>
	</div>
	<form action="prosesEditGuru.php" method="POST">
		<?php
		include 'koneksi.php';

		$nip=$_GET['nip'];
		$sql="SELECT * FROM guru WHERE nip='$nip'";
		$result=mysqli_query($connect,$sql);
		?>

			<!-- <form action="prosesEditGuru.php" method="GET"> -->
		<table class="table">
			<?php
			while ($row=mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>NIP : <input type="text" class="nim" name="nip" value="<?php echo $row['nip'];?>"></td>
			</tr>
			<tr>
				<td>Nama : <input type="text" class="nim" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir : <input type="text"  class="nim" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : <input type="text" class="nim" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>"></td>
			</tr>
			<tr>
				<td>Alamat : <textarea name="alamat" class="nim" rows="3" cols="20" value="<?php echo $row['alamat'];?>"></textarea></td>
			</tr>
			<tr>
				<td>No.Telp : <input type="text" class="nim" name="no_telp" value="<?php echo $row['no_telp'];?>"></td>
			</tr>
			<tr>
				<td>Guru Mapel : <input type="text" class="nim" name="materi" value="<?php echo $row['materi'];?>"></td>
			</tr>
			<tr>
				<td><input type="submit" class="button" name="simpan" value="Simpan"></td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
</div>
</body>
</html>