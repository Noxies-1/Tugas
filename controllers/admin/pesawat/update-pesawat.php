<?php
session_start();
include '../../config/Connection.php';
$id                     = $_POST['id'];
$nama                   = mysqli_real_escape_string($conn, $_POST['nama_maskapai']);
$kode_pesawat           = mysqli_real_escape_string($conn, $_POST['kode_pesawat']);
$tipe_pesawat           = $_POST['tipe_pesawat'];
$kapasitas_penumpang    = (int)$_POST['kapasitas_penumpang'];
$tahun_pembuatan        = (int)$_POST['tahun_pembuatan'];
$status                 = $_POST['status'];
$id_bandara             = $_POST['id_bandara_asal'];
$deskripsi              = mysqli_real_escape_string($conn, $_POST['deskripsi']);
$harga                  = (float)$_POST['harga'];

if (!empty($_FILES['gambar']['name'])) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $folder = '../../assets/images/';
    $path = $folder . basename($gambar);

    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE pesawat SET nama_maskapai='$nama', deskripsi='$deskripsi', harga='$harga', kode_pesawat='$kode_pesawat', 
        tipe_pesawat='$tipe_pesawat', kapasitas_penumpang='$kapasitas_penumpang', tahun_pembuatan='$tahun_pembuatan', 
        status='$status', id_bandara_asal='$id_bandara', gambar='$gambar' WHERE id_pesawat='$id'";
    } else {
        echo "<script>alert('❌ Upload gambar gagal!'); window.location='../../../view/admin/pesawat/edit-pesawat.php?id=$id';</script>";
        exit;
    }
} else {
        $query = "UPDATE pesawat SET nama_maskapai='$nama', deskripsi='$deskripsi', harga='$harga', kode_pesawat='$kode_pesawat', 
        tipe_pesawat='$tipe_pesawat', kapasitas_penumpang='$kapasitas_penumpang', tahun_pembuatan='$tahun_pembuatan', 
        status='$status', id_bandara='$id_bandara', WHERE id_pesawat='$id'";
}

$update = mysqli_query($conn, $query);

if ($update) {
    echo "<script>alert('✅ Pesawat berhasil diperbarui!'); window.location='../../../view/admin/pesawat/pesawat.php';</script>";
} else {
    echo "<script>alert('❌ Gagal memperbarui produk.'); window.location='../../../view/admin/pesawat/edit-pesawat.php?id=$id';</script>";
}
?>
