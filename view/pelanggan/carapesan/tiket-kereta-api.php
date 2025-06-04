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

  <div class="hero">
    <h1>Cara Pesan Tiket Pesawat di Traveloka</h1>
    <p>Booking e-tiket Anda hanya dalam 5 menit!</p>
  </div>

  <div class="nav-tabs">
    <a href="tiket-pesawat.php" >Cara Pesan Tiket Pesawat</a>
    <a href="hotel.php">Cara Pesan Hotel</a>
    <a href="tiket-kereta-api.php" class="active">Cara Pesan Tiket Kereta Api</a>
    <a href="cara-pembayaran.php">Cara Pembayaran</a>
  </div>

  <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/04/17/1492395476284-dd2e819bf5c2a75a1458e9e69bd9dfa0.jpeg?tr=q-75,w-386" alt="Langkah 1">
    </div>
    <div class="step-text">
      <span class="step-number">1</span>
      <h3>Cari kereta api Anda</h3>
      <p>Mulai pencarian dengan mengisi kota/stasiun asal dan tujuan Anda, tanggal perjalanan, serta jumlah penumpang.</p>
    </div>
  </div>

  <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/04/17/1492395495888-f8d765f21a800a35d9b51e3339c0f2eb.jpeg?tr=q-75,w-386" alt="Langkah 2">
    </div>
    <div class="step-text">
        <span class="step-number">2</span>
        <h3>Pilih dan pesan kereta Anda</h3>
      <p>Lihat detail kereta (nama kereta, jadwal, harga, dll) di halaman hasil pencarian, lalu pilih yang sesuai untuk Anda.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/04/17/1492395518212-e317ed325791f754e4f05c89c575d886.jpeg?tr=q-75,w-386" alt="Langkah 3">
    </div>
    <div class="step-text">
      <span class="step-number">3</span>
      <h3>Lengkapi data pemesan dan penumpang</h3>
      <p>Isi data pemesan yang dapat dihubungi dan data penumpang yang berangkat. Pastikan data yang Anda masukkan benar.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/04/11/1491900180125-71f4d0ae87a45d556d09f3c26c0c7247.jpeg?tr=q-75,w-386" alt="Langkah 4">
    </div>
    <div class="step-text">
      <span class="step-number">4</span>
      <h3>Lakukan pembayaran</h3>
      <p>Pilih metode pembayaran yang sesuai dengan Anda, dan lakukan pembayaran sebelum batas waktu habis.</p>
    </div>
  </div>

    <div class="step-section">
    <div class="step-image">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/04/20/1492651458227-f066142138b79246be201db28421fd90.jpeg?tr=q-75,w-386" alt="Langkah 5">
    </div>
    <div class="step-text">
      <span class="step-number">5</span>
      <h3>Dapatkan e-tiket Anda</h3>
      <p>Setelah pembayaran sukses diterima, e-tiket akan kami kirimkan ke alamat email Anda dalam 20 menit.</p>
    </div>
  </div>

      <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2><a href="../../index.html" style="text-decoration: none; color: #00A8E8;">Traveloka</a></h2>
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
