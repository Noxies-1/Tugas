<?php
// File: admin/dashboard.php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../../../config/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../../../assets/css/admin-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include '../sidebar.php';?>

  <div class="content">
    <h2>Dashboard Pesawat</h2>
    <div class="top-action">
      <a href="tambah-pesawat.php" class="btn-primary">+ Tambah Pesawat</a>
    </div>

    <?php
    $query = "SELECT * FROM pesawat";
    $hotel = mysqli_query($conn, $query);
    ?>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama Maskapai</th>
          <th>Kode Pesawat</th>
          <th>Tipe Pesawat</th>
          <th>Kapasitas Penumpang</th>
          <th>Tahun Pembuatan</th>
          <th>Status</th>
          <th></th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>

    <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($hotel)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><img src="../../../assets/img/<?= $row['gambar'] ?>" width="100"></td>
            <td><?= $row['nama_hotel'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?=$row['kode_pos']?></td>
            <td><?=$row['negara']?></td>
            <td><?= $row['no_telepon']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['jumlah_bintang'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td>Rp <?= number_format($row['harga']) ?></td>

        <td>
          <a href="edit-hotel.php?id=<?= $row['id_hotel'] ?>" class="btn-secondary">Edit</a>&nbsp;&nbsp;
          <a href="../../controllers/admin/hapus-hotel.php?id=<?= $row['id_hotel']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
        </td>

        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>