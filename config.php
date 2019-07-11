<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:afwandb.database.windows.net,1433; Database = bimbingan_mhs", "afwan", "Harahap_puny4");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "afwan@afwandb", "pwd" => "Harahap_puny4", "Database" => "bimbingan_mhs", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:afwandb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


?>

