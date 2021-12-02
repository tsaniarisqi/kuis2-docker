<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Guru</title>
	<link rel="stylesheet" type="text/css" href="cg.css">
	<style>
		.icon{
			margin-left: 50px;
		}
		.judul{
	font-family: "Raleway Thin", sans-serif;
font-weight: bolder;
/*margin-left: 8px;*/
color:black; 
margin-top: 50px;
text-align: center;
letter-spacing: 4px;
font-size: 50px;
}
.table{
margin-left: 60px;
margin-top: 40px;
}
.garis{
	background:-webkit-linear-gradient(right,#FFEB00,#FFCC00);
	height: 5px;
	margin-top: -30px;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: 355px;
	width: 500px;
}

	</style>
</head>
<body>
<div class="s-layout">
		<div class="s-layout_sidebar">
			<a href="#0" class="s-sidebar_trigger">
				<i class="fa fa-bars"></i>
			</a>
			<nav class="s-sidebar_nav">
				<ul>
					<li>
						<a href="pageHome.html" class="s-sidebar_nav-link">
							<img src="home.png" class="icon">  Beranda
						</a>
					</li>
					<li>
						<a href="inputData.php" class="s-sidebar_nav-link">
							<img src="input.png" class="icon"> Input Data Siswa
						</a>
					</li>
					<li>
						<a href="homeCRUD.php" class="s-sidebar_nav-link">
							<img src="data.png" class="icon">  Lihat Data Siswa
						</a>
					</li>
					<li>
						<a href="inputGuru.php" class="s-sidebar_nav-link">
							<img src="input.png" class="icon"> Input Data Guru
						</a>
					</li>
					<li>
						<a href="crudGuru.php" class="s-sidebar_nav-link">
							<img src="data.png" class="icon">  Lihat Data Guru
						</a>
					</li>
					<li>
						<a href="index.html" class="s-sidebar_nav-link">
							<img src="logout.png" class="icon">  Back
						</a>
					</li>
				</ul>
			</nav>
			<main class="s-layout_content">
				<p class="judul">Lihat Data Guru</p>
				<div class="garis"></div>
				<table class="table">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>JK</th>
			<th>Alamat</th>
			<th>No.Telp</th>
			<th>Guru Mapel</th>
			<th>Tindakan</th>
		</tr>
	
	
		<?php
		include 'koneksi.php';

		$query="SELECT*FROM guru";
		$result=mysqli_query($connect,$query);

		if (mysqli_num_rows($result)>0) {
			while ($row=mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row["nip"]?></td>
					<td><?php echo $row["nama"]?></td>
					<td><?php echo $row["tgl_lahir"]?></td>
					<td><?php echo $row["jenis_kelamin"]?></td>
					<td><?php echo $row["alamat"]?></td>
					<td><?php echo $row["no_telp"]?></td>
					<td><?php echo $row["materi"]?></td>
					<td>
						<a href="editGuru.php?nip=<?php echo $row['nip'];?>"><input type="submit" class="button" value="Edit"></a>
						<a href="hapusGuru.php?nip=<?php echo $row['nip'];?>"><input type="submit" class="button" value="Hapus"></a>
					</td>
				</tr>
				<?php
				}
			}else{
				echo "0 results";
			}
			?>
	</table>
			</main>
</body>
</html>