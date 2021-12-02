<!DOCTYPE html>
<html>
<head>
	<title>Input Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="inputData.css">
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
				<div class="kotak">
		<div class="card1">
		<div class="card2">
			<h2>Input Data Siswa </h2>
			<div class="underline"></div>
		</div>
	</div>
	
			<form method="GET" action="data.php">
				<p><label class="a">NISN :<input type="text" name="nisn" class="nim"> </label></p>
				<p><label class="a">Nama :<input type="text" name="nama" class="nim"> </label></p>
				<p><label class="a">Tanggal Lahir :<input type="text" name="tgl_lahir" class="nim" placeholder="YYYY-MM-DD"> </label></p>
				<p><label class="a">Jenis Kelamin :<input type="text" name="jenis_kelamin" class="nim" placeholder="L/P"> </label></p>
				<p><label class="a">Alamat :<textarea name="alamat" class="nim"></textarea> </label></p>
				<p><label class="a">No Telpon :<input type="text" name="no_telp" class="nim"> </label></p>
				<input type="submit" class="button" value="Simpan">

			</form>
		
	</div>
			</main>
		</div>
</body>
</html>