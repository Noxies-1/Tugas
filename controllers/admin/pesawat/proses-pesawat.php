<?php
session_start();
include '../../../config/Connection.php';

// Validasi input
if (empty($_POST['nama_hotel']) || empty($_POST['alamat']) || empty($_POST['harga'])) {
    echo "<script>alert('❌ Data wajib tidak boleh kosong!'); window.location='../../view/admin/tambah-hotel.php';</script>";
    exit;
}

$nama                   = mysqli_real_escape_string($conn, $_POST['nama_maskapai']);
$kode_pesawat           = mysqli_real_escape_string($conn, $_POST['kode_pesawat']);
$tipe_pesawat           = $_POST['tipe_pesawat'];
$kapasitas_penumpang    = (int)$_POST['kapasitas_penumpang'];
$tahun_pembuatan        = (int)$_POST['tahun_pembuatan'];
$status                 = $_POST['status'];
$id_bandara             = $_POST['id_bandara_asal'];
$deskripsi              = mysqli_real_escape_string($conn, $_POST['deskripsi']);
$harga                  = (float)$_POST['harga'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = '../../../assets/img/';
$path = $folder . basename($gambar);

if (move_uploaded_file($tmp, $path)) {
    $query = "INSERT INTO pesawat 
        (nama_maskapai, deskripsi, harga, tipe_pesawat, gambar, kode_pesawat, kapasitas_penumpang, tahun_pembuatan, status, id_bandara_asal)
        VALUES ('$nama', '$deskripsi', '$harga', '$tipe_pesawat', '$gambar', '$kode_pesawat', '$kapasitas_penumpang', '$tahun_pembuatan', '$status', '$id_bandara')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('✅ Pesawat berhasil ditambahkan!'); window.location='../../view/admin/dashboard.php';</script>";
    } else {
        echo "<script>alert('❌ Gagal menyimpan data Pesawat: " . mysqli_error($conn) . "'); window.location='../../../view/admin/pesawat/tambah-pesawat.php';</script>";
    }
} else {
    echo "<script>alert('❌ Upload gambar gagal!'); window.location='../../../view/admin/pesawat/edit-pesawat.php';</script>";
}
?>
