<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cara Pesan Tiket Pesawat</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fff;
    }

    .hero {
      background: url('airport.jpg') center center/cover no-repeat;
      height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }

    .hero h1 {
      font-size: 36px;
      font-weight: bold;
    }

    .hero p {
      font-size: 18px;
    }

    .nav-tabs {
      display: flex;
      justify-content: center;
      background-color: #007bff;
      color: white;
    }

    .nav-tabs a {
      padding: 15px 30px;
      display: inline-block;
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .nav-tabs a.active {
      border-bottom: 3px solid white;
    }

    .step-section {
      display: flex;
      align-items: center;
      padding: 30px;
      border-bottom: 1px solid #eee;
    }

    .step-image {
      flex: 1;
      text-align: center;
    }

    .step-image img {
      width: 80%;
      max-width: 300px;
    }

    .step-text {
      flex: 2;
      padding-left: 30px;
    }

    .step-number {
      background-color: #d6f0ff;
      color: #007bff;
      font-weight: bold;
      padding: 10px 15px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 10px;
    }

    .step-text h3 {
      margin: 0 0 10px 0;
}
    .footer {
    background-color:rgb(33, 41, 50);
    padding: 20px;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}
.footer-section {
    flex: 1;
    margin: 10px;
}
.footer-section h2, .footer-section h3 {
    color: #00A8E8;
}
.footer-section ul {
    list-style: none;
    padding: 0;
}
.footer-section ul li {
    margin: 8px 0;
}
.footer-section ul li a {
    color: white;
    text-decoration: none;
}
.partner-btn {
    background-color: #00A8E8;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
    border-radius: 5px;
}
.payment-partners img {
    width: 50px;
    margin: 5px;
}
.social-media {
    display: flex;
    flex-direction: column;
}
.social-media li {
    margin: 5px 0;
}
  </style>
</head>
<body>
    <div class="back-button-container">
    <a href="javascript:history.back()" class="back-button">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
    </div>

  <div class="hero">
    <h1>Cara Pesan Tiket Pesawat di Traveloka</h1>
    <p>Booking e-tiket Anda hanya dalam 5 menit!</p>
  </div>

  <div class="nav-tabs">
    <a href="tiket-pesawat.php">Cara Pesan Tiket Pesawat</a>
    <a href="hotel.php" class="active">Cara Pesan Hotel</a>
    <a href="tiket-kereta-api.php">Cara Pesan Tiket Kereta Api</a>
    <a href="cara-pembayaran.php">Cara Pembayaran</a>
  </div>

  <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469706468049-bce3b8820b0bc2469ee47b1f556de65d.png?tr=q-75,w-386" alt="Langkah 1">
    </div>
    <div class="step-text">
      <span class="step-number">1</span>
      <h3>Cari Hotel</h3>
      <p>Mulai pencarian hotel Anda dengan memasukkan destinasi, tempat wisata, atau nama hotel, dan waktu menginap.</p>
    </div>
  </div>

  <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469706415047-2060b9b7b0943ed0ba796053e768d905.png?tr=q-75,w-386" alt="Langkah 2">
    </div>
    <div class="step-text">
      <span class="step-number">2</span>
      <h3>Pilih Hotel</h3>
      <p>Di halaman hasil pencarian, pilih kamar hotel yang Anda kehendaki. Klik tombol Lihat Kamar untuk mengetahui detail kamar yang Anda pilih.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469706430059-0ab4991810a698507866c855a8449f10.png?tr=q-75,w-386" alt="Langkah 3">
    </div>
    <div class="step-text">
      <span class="step-number">3</span>
      <h3>Pesan Hotel</h3>
      <p>Di halaman detail hotel, pilih jenis dan jumlah kamar yang ingin Anda pesan.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469706444060-079c3b5dcdc4f1c87fe3393e10b14278.png?tr=q-75,w-386" alt="Langkah 4">
    </div>
    <div class="step-text">
      <span class="step-number">4</span>
      <h3>Isi data pemesan dan tamu hotel</h3>
      <p>Isi data pemesan yang dapat dihubungi dan data tamu yang akan menginap. <br>
Anda pun dapat menambahkan asuransi perjalanan ke pesanan hotel Anda.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/27/1469622943705-1fd7d7a1867b8e701af9f8cb029e5712.png?tr=q-75,w-386" alt="Langkah 5">
    </div>
    <div class="step-text">
      <span class="step-number">5</span>
      <h3>Lakukan pembayaran</h3>
      <p>Pilih metode pembayaran yang sesuai kebutuhan Anda. Lakukan pembayaran sebelum batas waktu habis.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469706487796-8a312ab92403276ed040e6ee3649d8cd.png?tr=q-75,w-386" alt="Langkah 6">
    </div>
    <div class="step-text">
      <span class="step-number">6</span>
      <h3>Voucher hotel dikirimkan</h3>
      <p>Setelah pembayaran sukses diterima, voucher hotel resmi Traveloka akan kami kirimkan ke alamat email Anda dalam maks. 60 menit.</p>
    </div>
  </div>

      <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2>traveloka</h2>
                <button class="partner-btn">Jadi Partner Traveloka</button>
                <div class="payment-partners">
                    <img src="../../../assets/img/Visa.jpg" alt="Visa">
                    <img src="../../../assets/img/MasterCard.png" alt="Mastercard">
                    <img src="../../../assets/img/BCA.png" alt="BCA">
                    <img src="../../../assets/img/BNI.jpg" alt="BNI">
                </div>
            </div>
            <div class="footer-section">
                <h3>Tentang Traveloka</h3>
                <ul>
                    <li><a href="../carapesan/tiket-pesawat.php">Cara Pesan</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                    <li><a href="#">Pusat Bantuan</a></li>
                    <li><a href="#">Karier</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Produk</h3>
                <ul>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Tiket Pesawat</a></li>
                    <li><a href="#">Tiket Kereta Api</a></li>
                    <li><a href="#">Tiket Bus & Travel</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow kami di</h3>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">TikTok</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
