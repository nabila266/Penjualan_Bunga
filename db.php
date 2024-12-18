<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="db_penjualanbunga";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die ("Gagal terhubung ke database" . $conn->connect_error);
}
echo "Sukses Terhubung";
?>