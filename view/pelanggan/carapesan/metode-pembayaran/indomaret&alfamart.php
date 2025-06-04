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
            text-align: center;
        }

        /* Hero Section */
        .hero {
            background-image: url('background-airport.jpg'); /* ganti dengan gambar Anda */
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

    .payment-section {
      max-width: 800px;
      margin: 0 auto;
    }

    .payment-section h3 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .payment-section p {
      font-size: 16px;
      color: #444;
      margin-bottom: 30px;
    }

    .retail-logos {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .retail-logos img {
      height: 50px;
      object-fit: contain;
    }

    hr {
      margin-top: 50px;
      border: none;
      border-top: 1px solid #e0e0e0;
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
    <a href="../cara-pembayaran.php">Cara Pembayaran</a>
  </div>

    <h2>Metode Pembayaran</h2>
    <!-- Main Content -->
    <div class="content">

        <div class="tabs-menu">
            <a href="kartu-kredit.php" >Kartu Kredit</a>
            <a href="transfer&ATM.php" >Transfer & ATM</a>
            <a href="indomaret&alfamart.php" class="active">Indomaret & Alfamart</a>
            <a href="paylater.php">PayLater</a>
            <a href="saldo-uangku.php">Saldo UANGKU</a>
        </div>

<div class="payment-section">
    <h3>Traveloka Menerima Pembayaran via Indomaret dan Alfamart</h3>
    <p>
      Anda dapat melakukan pembayaran di gerai Indomaret atau Alfamart. Untuk pesanan tiket pesawat/hotel, pembayaran dapat dilakukan maks. 24 jam sebelum waktu keberangkatan.
    </p>

    <div class="retail-logos">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495004578375-a54f234bccb516055821ed80d2bf167c.png?tr=q-75" alt="Indomaret">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495004593805-e8710dc7d626e6b48d11fd46a0daf3d8.png?tr=q-75" alt="Alfamart">
      <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495004606508-6b55a5fff62d48d8f0136889b88fb963.png?tr=q-75" alt="Alfamidi">
    </div>
  </div>
  <hr>
  <div class="section-title">Cara Mudah Pembayaran via Indomaret dan Alfamart</div>

        <div class="steps">
            <div class="step">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495004089425-85ad9e3adc5ec469547333c3d418848a.png?tr=q-75,w-386" alt="Step 1">
                <div class="step-text">
                    <span class="step-number">1.</span> Di halaman pembayaran, pilih<strong style="color:#007BFF;"> Indomaret</strong> atau
                    <strong style="color:#007BFF;">Alfamart</strong>
                </div>
            </div>

            <div class="step">
                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/17/1495004287238-3a000dd6d6332845d0ff99b0247f94ad.png?tr=q-75,w-386" alt="Step 2">
                <div class="step-text">
                    <span class="step-number">2.</span> Ikuti instruksi dan klik tombol <strong style="color:#007BFF;">Bayar</strong>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2><a href="../../index.html" style="text-decoration: none; color: #00A8E8;">Traveloka</a></h2>
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
