<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="editNew.css">

</head>
<body>
	<div class="kotak">
		<div class="card1">
		<div class="card2">
			<h2>Edit Data Siswa </h2>
			<div class="underline"></div>
		</div>
	</div>
<form action="editProses.php" method="POST">
<?php
		include 'koneksi.php';

		$nisn=$_GET['nisn'];
		$sql="SELECT * FROM siswa WHERE nisn='$nisn'";
		$result=mysqli_query($connect,$sql);
		?>
		
		
		<table class="table">
			<?php
			while ($row=mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>NISN : 
				<input type="text" name="nisn" class="nim" value="<?php echo $row['nisn'];?>"></td>
			</tr>
			<tr>
				<td>Nama : <input type="text" name="nama" class="nim" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : <input type="text" class="nim" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir : <input type="text" class="nim" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"></td>
			</tr>
			
			<tr>
				<td>Alamat : <textarea name="alamat" class="nim" rows="3" cols="20" value="<?php echo $row['alamat'] ?>">
					</textarea></td>
			</tr>
			<tr>
				<td>No.Telp : <input type="text" class="nim" name="no_telp" value="<?php echo $row['no_telp'];?>"></td>
			</tr>
			
			<tr>
				<td><input type="submit"  class="button" name="simpan" value="Simpan"></td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
</div>

</body>
</html>