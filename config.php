<?php

$server = "afwan.database.windows.net";
$user = "root";
$password = "";
$nama_database = "bimbingan_mhs";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
