<?php
// File: admin/tambah_produk.php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link rel="stylesheet" href="../../assets/css/admin-style.css">
  <style>
    .form-box input,
    .form-box textarea,
    .form-box select,
    .form-box button {
      display: block;
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🛍️ Tambah Hotel</h2>
    <form class="admin-form" action="../../controllers/admin/proses-hotel.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="nama_hotel" placeholder="Nama Hotel" required>
      <textarea name="deskripsi" placeholder="Deskripsi Hotel" required></textarea>
      <textarea name="alamat" placeholder="Alamat Hotel" required></textarea>
      <textarea name="negara" placeholder="Negara" required></textarea>
      <textarea name="email" placeholder="Email" required></textarea>
      <input type="number" name="kode_pos" placeholder="Kode Pos" required>
      <input type="number" name="harga" placeholder="Harga" required>
      <input type="number" name="no_telepon" placeholder="Nomor Telepon" required>
      <input type="number" name="jumlah_bintang" placeholder="Bintang" required>
      <input type="file" name="gambar" accept="image/*" required>

      <button type="submit">Simpan Hotel</button>
       <a href="dashboard.php" class="btn-kembali">Kembali</a>
    </form>
  </div>
</body>
</html>
