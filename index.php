<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa Bimbingan</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Mahasiswa Bimbingan</h3>
		<h1>AMIK TRI DHARMA PEKANBARU</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-mahasiswa.php">Pendaftar</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} 
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
