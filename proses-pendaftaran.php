<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$judulta = $_POST['judulta'];
	
	// buat query
	$sql = "INSERT INTO daftar_mhs (nama, alamat, jenis_kelamin, agama, judulta) VALUE ('$nama', '$alamat', '$jk', '$agama', '$judulta')";
	$query = mysqli_query($db, $sql);
	
	
?>
