<?php
// File: admin/dashboard.php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../../config/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../../assets/css/admin-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="sidebar">
    <h2>Menu</h2>
    <a href="../admin/hotel/hotel.php">🏠 Hotel</a>
    <a href="#">🧸 Mainan</a>
    <a href="#">💄 Kosmetik</a>
    <a href="#">👜 Tas</a>
    <a href="../../controllers/admin/logout.php" class="logout">Logout</a>
  </div>
  </div>
</body>
</html>