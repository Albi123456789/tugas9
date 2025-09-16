<?php
$host = "localhost";
$user = "xirpl1-2";
$pass = "3060096013";
$db   = "db_xirpl1-2_1";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
