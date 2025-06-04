<?php
session_start();
require_once '../../../config/Connection.php';

$id = $_GET['id'];
// Ambil data produk untuk hapus file gambar
$data = mysqli_query($conn, "SELECT gambar FROM pesawat WHERE id_pesawat = '$id'");
$row = mysqli_fetch_assoc($data);
$gambar = $row['gambar'];

// Hapus data produk
$query = mysqli_query($conn, "DELETE FROM pesawat WHERE id_pesawat = '$id'");

if ($query) {
    // Hapus gambar dari folder jika ada
    $path = '../../../assets/img/' . $gambar;
    if (file_exists($path)) {
        unlink($path);
    }
    echo "<script>alert('Pesawat berhasil dihapus!'); window.location='../../../view/admin/dashboard.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus Pesawat.'); window.location='../../../view/admin/dashboard.php';</script>";
}
?>