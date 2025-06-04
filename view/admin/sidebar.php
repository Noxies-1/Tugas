<?php
include __DIR__ . '/../../config/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../../assets/css/admin-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .sidebar a {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px;
      color: wheat;
      text-decoration: none;
      font-weight: bold;
    }
    .icon-hotel { color: #007bff; }       /* Biru */
    .icon-plane { color: #28a745; }       /* Hijau */
    .icon-train { color: #ffc107; }       /* Kuning */
    .icon-bus { color: #dc3545; }         /* Merah */
    .icon-logout { color: #6c757d; }      /* Abu-abu */
  </style>
</head>
<body>
  <div class="sidebar">
  <h2>Menu</h2>

  <a href="/Tubes_pwd/view/admin/hotel/hotel.php">
    <i class="fa-solid fa-hotel icon-hotel"></i> Hotel
  </a>

  <a href="/Tubes_pwd/view/admin/pesawat/pesawat.php">
    <i class="fa-solid fa-plane icon-plane"></i> Pesawat
  </a>

  <a href="/Tubes_pwd/view/admin/kereta/kereta.php">
    <i class="fa-solid fa-train icon-train"></i> Kereta Api
  </a>

  <a href="/Tubes_pwd/view/admin/bus/bus.php">
    <i class="fa-solid fa-bus icon-bus"></i> Bus
  </a>

  <a href="/Tubes_pwd/controllers/admin/logout.php" class="logout">
    <i class="fa-solid fa-right-from-bracket icon-logout"></i> Logout
  </a>
</div>

</body>
</html>
