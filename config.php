<?php
$server = "afwandb.database.windows.net";
$user = "afwan";
$password = "Harahap_puny4";
$nama_database = "bimbingan_mhs";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

