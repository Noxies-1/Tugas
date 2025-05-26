<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '200905';
    $db = 'db_latihan';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>