<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pembayaran di Traveloka</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Hero Section */
        .hero {
            background-image: url('../../../../assets/img/carabayar.png'); /* ganti dengan gambar Anda */
            background-size: cover;
            background-position: center;
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
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 20px;
        }

        /* Tab Navigation */
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

        /* Payment Method Section */
        .content {
            padding: 40px 20px;
            max-width: 1000px;
            margin: auto;
        }

        .tabs-menu {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
            border-bottom: 2px solid #D0F00F;
        }

        .tabs-menu a {
            margin: 0 20px;
            padding-bottom: 10px;
            cursor: pointer;
            font-weight: bold;
            color: #555;
            text-decoration: none;
        }

        .tabs-menu .active {
            border-bottom: 4px solid #8BE600;
            color: #007BFF;
        }

        .payment-details {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .payment-text {
            flex: 1;
        }

        .payment-text h3 {
            color: #444;
        }

        .steps {
            margin-top: 50px;
        }

        .step {
            display: flex;
            margin-bottom: 40px;
            align-items: center;
        }

        .step img {
            width: 300px;
            margin-right: 30px;
        }

        .step-text {
            font-size: 18px;
        }

        .step-number {
            font-size: 24px;
            color: #007BFF;
            margin-right: 10px;
        }

    h2 {
      text-align: center;
      margin-bottom: 40px;
    }

    .payment-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1000px;
      margin: 0 auto;
      gap: 20px;
    }

    .payment-column {
      flex: 1;
      min-width: 300px;
    }

    .payment-column h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .payment-column p {
      font-size: 14px;
      line-height: 1.6;
    }

    .bank-logos,
    .atm-logos {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }

    .bank-logos img,
    .atm-logos img {
      height: 40px;
    }

    hr {
      margin: 60px 0 20px;
      border: none;
      border-top: 1px solid #ddd;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      font-size: 20px;
      margin-top: 40px;
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

    <!-- Hero -->
    <div class="hero">
        <h1>Cara Pembayaran di Traveloka</h1>
        <p>Transaksi aman dengan berbagai metode pembayaran, semua bebas biaya transaksi</p>
    </div>

    

    <!-- Navigation Tabs -->
  <div class="nav-tabs">
    <a href="../tiket-pesawat.php" >Cara Pesan Tiket Pesawat</a>
    <a href="../hotel.php">Cara Pesan Hotel</a>
    <a href="../tiket-kereta-api.php" >Cara Pesan Tiket Kereta Api</a>
    <a href="../cara-pembayaran.php" class="active">Cara Pembayaran</a>
  </div>

    <h2>Metode Pembayaran</h2>
    <!-- Main Content -->
    <div class="content">

        <div class="tabs-menu">
            <a href="kartu-kredit.php" >Kartu Kredit</a>
            <a href="transfer&ATM.php" class="active">Transfer & ATM</a>
            <a href="indomaret&alfamart.php" >Indomaret & Alfamart</a>
            <a href="paylater.php">PayLater</a>
            <a href="saldo-uangku.php">Saldo UANGKU</a>
        </div>

  <h2>Traveloka Menerima Pembayaran Melalui Transfer & ATM</h2>

  <div class="payment-container">
    <div class="payment-column">
      <h3>Transfer</h3>
      <p>Lakukan pembayaran aman dan nyaman via Transfer BCA, BNI, BRI, atau Mandiri.</p>
      <div class="bank-logos">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692579251-4e388d67a5246a60d0e7a465efa8f203.png?tr=q-75" alt="BCA">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692598530-1d23a9e438bcba95a46cee77e4a7b771.png?tr=q-75" alt="Mandiri">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692618468-99065c5a3fd37f1348bd9df031d03ff9.png?tr=q-75" alt="BNI">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692640346-9ce08afb351a3ab5abe68478f8e94a24.png?tr=q-75" alt="BRI">
      </div>
    </div>

    <div class="payment-column">
      <h3>ATM</h3>
      <p>Jika Anda tidak memiliki rekening BCA, BNI, BRI, atau Mandiri, lakukan pembayaran melalui bank lain dalam jaringan Bersama, Prima, dan Alto. Metode ATM tersedia untuk Anda selama 24 jam nonstop.</p>
      <div class="atm-logos">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692932918-d19a47c01a8dfe1b79fc3b5d3f785a13.png?tr=q-75" alt="ATM Bersama">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692955605-10f0dcafd81ab89a5c4fd36c0c67758e.png?tr=q-75" alt="Prima">
        <img src="https://ik.imagekit.io/tvlk/image/imageResource/2016/07/28/1469692978109-a671d85e756e2472f0641f2180420d5c.png?tr=q-75" alt="Alto">
      </div>
    </div>
  </div>

  <hr>
  <div class="section-title">Cara Mudah Pembayaran via Transfer & ATM</div>

        <div class="steps">
            <div class="step">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495001098407-dacbf68f34d86e196ff06ea175e61bda.png?tr=q-75,w-386" alt="Step 1">
                <div class="step-text">
                    <span class="step-number">1.</span> Di halaman pembayaran, <strong style="color:#007BFF;">Transfer</strong> atau
                    <strong style="color:#007BFF;">ATM</strong>
                </div>
            </div>

            <div class="step">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495000117329-466b715a3339114c45f8e9c39d67b052.png?tr=q-75,w-386" alt="Step 2">
                <div class="step-text">
                    <span class="step-number">2.</span> Metode <strong style="color:#007BFF;">Transfer</strong> 
                    khusus untuk BCA, BNI, BRI, Mandiri. Bank lain dalam jaringan Bersama, Prima, dan Alto, dapat menggunakan metode 
                    <strong style="color:#007BFF;">ATM</strong>
                </div>
            </div>

            <div class="step">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495001998659-71d9247db082e48083e5a1917cb46101.png?tr=q-75,w-386" alt="Step 3">
                <div class="step-text">
                    <span class="step-number">3.</span> Klik <strong style="color:#007BFF;">Bayar</strong>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
<h2><a href="../../../../view/pelanggan/index.php" style="text-decoration: none; color: #00A8E8;">Traveloka</a></h2>
                <button class="partner-btn">Jadi Partner Traveloka</button>
                <div class="payment-partners">
                    <img src="../../../../assets/img/Visa.jpg" alt="Visa">
                    <img src="../../../../assets/img/MasterCard.png" alt="Mastercard">
                    <img src="../../../../assets/img/BCA.png" alt="BCA">
                    <img src="../../../../assets/img/BNI.jpg" alt="BNI">
                </div>
            </div>
            <div class="footer-section">
                <h3>Tentang Traveloka</h3>
                <ul>
                    <li><a href="../../carapesan/tiket-pesawat.php">Cara Pesan</a></li>
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
