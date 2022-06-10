<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "himse";

$konek = mysqli_connect($host, $username, $password, $db_name);

if (!$konek) {
    die("Koneksi Gagal");
}
?>