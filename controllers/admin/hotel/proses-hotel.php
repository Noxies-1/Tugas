<?php
session_start();
include '../../../config/Connection.php';

// Validasi input
if (empty($_POST['nama_hotel']) || empty($_POST['alamat']) || empty($_POST['harga'])) {
    echo "<script>alert('❌ Data wajib tidak boleh kosong!'); window.location='../../../view/admin/hotel/tambah-hotel.php';</script>";
    exit;
}

$nama           = mysqli_real_escape_string($conn, $_POST['nama_hotel']);
$deskripsi      = mysqli_real_escape_string($conn, $_POST['deskripsi']);
$harga          = (float)$_POST['harga'];
$alamat         = mysqli_real_escape_string($conn, $_POST['alamat']);
$negara         = mysqli_real_escape_string($conn, $_POST['negara']);
$email          = mysqli_real_escape_string($conn, $_POST['email']);
$kdp            = $_POST['kode_pos'];
$tlp            = mysqli_real_escape_string($conn, $_POST['no_telepon']);
$jumlah_bintang = (int)$_POST['jumlah_bintang'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = '../../../assets/img/';
$path = $folder . basename($gambar);

if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO hotel 
        (nama_hotel, deskripsi, harga, alamat, gambar, no_telepon, jumlah_bintang, kode_pos, email, negara)
        VALUES ('$nama', '$deskripsi', '$harga', '$alamat', '$gambar', '$tlp', '$jumlah_bintang', '$kdp', '$email', '$negara')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('✅ Hotel berhasil ditambahkan!'); window.location='../../../view/admin/dashboard.php';</script>";
    } else {
        echo "<script>alert('❌ Gagal menyimpan data hotel: " . mysqli_error($conn) . "'); window.location='../../../view/admin/hotel/tambah-hotel.php';</script>";
    }
} else {
    echo "<script>alert('❌ Upload gambar gagal!'); window.location='../../../view/admin/hotel/tambah-hotel.php';</script>";
}
?>
