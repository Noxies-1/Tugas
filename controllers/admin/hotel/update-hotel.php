<?php
session_start();
include '../../../config/Connection.php';
$id             = $_POST['id'];
$nama           = mysqli_real_escape_string($conn, $_POST['nama_hotel']);
$deskripsi      = mysqli_real_escape_string($conn, $_POST['deskripsi']);
$harga          = (float)$_POST['harga'];
$alamat         = mysqli_real_escape_string($conn, $_POST['alamat']);
$negara         = mysqli_real_escape_string($conn, $_POST['negara']);
$email          = mysqli_real_escape_string($conn, $_POST['email']);
$kdp            = $_POST['kode_pos'];
$tlp            = mysqli_real_escape_string($conn, $_POST['no_telepon']);
$jumlah_bintang = (int)$_POST['jumlah_bintang'];

if (!empty($_FILES['gambar']['name'])) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $folder = '../../../assets/img/';
    $path = $folder . basename($gambar);

    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE hotel SET nama_hotel='$nama', deskripsi='$deskripsi', harga='$harga', kode_pos='$kdp', alamat='$alamat', no_telepon='$tlp', jumlah_bintang='$jumlah_bintang', email='$email', negara='$negara', gambar='$gambar' WHERE id_hotel='$id'";
    } else {
        echo "<script>alert('❌ Upload gambar gagal!'); window.location='../../../view/admin/hotel/edit-hotel.php?id=$id';</script>";
        exit;
    }
} else {
    $query = "UPDATE hotel SET nama_hotel='$nama', deskripsi='$deskripsi', harga='$harga', kode_pos='$kdp', alamat='$alamat', no_telepon='$tlp', jumlah_bintang='$jumlah_bintang', email='$email', negara='$negara' WHERE id_hotel='$id'";
}

$update = mysqli_query($conn, $query);

if ($update) {
    echo "<script>alert('✅ Hotel berhasil diperbarui!'); window.location='../../../view/admin/hotel/hotel.php';</script>";
} else {
    echo "<script>alert('❌ Gagal memperbarui Hotel.'); window.location='../../../view/admin/hotel/edit-hotel.php?id=$id';</script>";
}
?>
