<?php
require_once 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
if ($nama==null&&$alamat==null) {
    echo "<h1>Semua Formulir Harus Diisi!</h1>";
} else {
    echo "<h1>Selamat $nama Anda Telah Terdaftar Di HIMSE</h1>";
    $konek->query("INSERT INTO tb_mhs (`nama`, `alamat`) VALUES('$nama','$alamat')");
}
?>