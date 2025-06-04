<?php
include '../../../config/Connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM hotel WHERE id_hotel = '$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Hotel</title>
  <link rel="stylesheet" href="../../../assets/css/admin-style.css">
  <style>
    .form-group {
      margin-bottom: 10px;
      display: flex;
      flex-direction: column;
    }
    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }
    .admin-form input,
    .admin-form textarea,
    .admin-form select {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🏨 Edit Hotel</h2>
    <form class="admin-form" action="../../../controllers/admin/hotel/update-hotel.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $data['id_hotel'] ?>">

      <div class="form-group">
        <label>Nama Hotel</label>
        <input type="text" name="nama_hotel" value="<?= $data['nama_hotel'] ?>" required>
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" required><?= $data['deskripsi'] ?></textarea>
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" required><?= $data['alamat'] ?></textarea>
      </div>

      <div class="form-group">
        <label>Kode Pos</label>
        <input type="text" name="kode_pos" value="<?= $data['kode_pos'] ?>">
      </div>

      <div class="form-group">
        <label>Negara</label>
        <input type="text" name="negara" value="<?= $data['negara'] ?>">
      </div>

      <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="text" name="no_telepon" value="<?= $data['no_telepon'] ?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= $data['email'] ?>">
      </div>

      <div class="form-group">
        <label>Jumlah Bintang</label>
        <input type="number" name="jumlah_bintang" min="1" max="5" value="<?= $data['jumlah_bintang'] ?>" required>
      </div>

      <div class="form-group">
        <label>Harga</label>
        <input type="number" step="0.01" name="harga" value="<?= $data['harga'] ?>" required>
      </div>

      <div class="form-group">
        <label>Gambar Hotel (biarkan kosong jika tidak ingin mengubah)</label>
        <input type="file" name="gambar" accept="image/*">
      </div>

      <button type="submit" name="edit">Update Hotel</button>
      <a href="hotel.php" class="btn-kembali">Kembali</a>
    </form>
  </div>
</body>
</html>