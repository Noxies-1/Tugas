<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Tiket.com</title>
    <link rel="stylesheet" href="../../assets/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    a{
        text-decoration: none;
        color: white;
    }
        .icon-location {
    color: #000000;
    margin-right: 4px;
    }

    .text-location{
        color: #000000;
        font-weight: bold;
        }
</style>
<body>
    <header class="navbar">
        <div class="logo">tiket<span class="dot">.</span>com</div>
        <div class="search-bar">
            <input type="text" placeholder="Penerbangan ke Surabaya">
        </div>
        <div class="menu">
            <a href="#">Jadi Partner tiket.com</a>
            <a href="#">Blibli Tiket Rewards</a>
            <a href="#">Your Orders</a>
            <div class="currency">IDR <span class="flag"></span></div>
            <button class="btn btn-outline" ><a href="../../view/pelanggan/login.php">MASUK</a></button>
            <button class="btn btn-primary"><a href="../../view/pelanggan/register.php">DAFTAR</a></button></button>
        </div>
    </header>
    <div class="container">
        <h2>Coba suasana yang beda, cek rumah liburan di Agoda!</h2>
        <div class="tabs">
            <div class="tab active"><a href="index.php">Jakarta</a></div>
            <div class="tab"><a href="bandung.php">Bandung</a></div>
            <div class="tab"><a href="yogyakarta.php">Yogyakarta</a></div>
            <div class="tab"><a href="surabaya.php">Surabaya</a></div>
            <div class="tab"><a href="bali.php">Bali</a></div>
        </div>
        <div class="hotel-list">
            <div class="hotel-card">
                <img src="../../assets/img/Bobopod juanda jakarta.jpg" alt="Hotel 1">
                <div class="hotel-info">
                    <h3>Bobopod Juanda, Jakarta</h3>
                    <div class="location-info">
                    <i class="fa-solid fa-location-dot icon-location"></i>
                    <span class="text-location">Pasar Baru, Jakarta</span>
                    </div>
                    <p class="price">IDR 158,162</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Bobopod Tanah Abang jakarta.jpg" alt="Hotel 2">
                <div class="hotel-info">
                    <h3>Bobopod Tanah Abang, Jakarta</h3>
                    <div class="location-info">
                    <i class="fa-solid fa-location-dot icon-location"></i>
                    <span class="text-location">Monas, Jakarta</span>
                    </div>
                    <p class="price">IDR 129,862</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Andara Home Setiabudi.jpg" alt="Hotel 3">
                <div class="hotel-info">
                    <h3>Andara Home Setiabudi</h3>
                    <div class="location-info">
                    <i class="fa-solid fa-location-dot icon-location"></i>
                    <span class="text-location">Kuningan, Jakarta</span>
                    </div>
                    <p class="price">IDR 281,395</p>
                </div>
            </div>
        </div>
        
        <h2>Yuk, cek inspirasi liburan di Indonesia ini</h2>
        <div class="hotel-list">
            <div class="hotel-card">
                <img src="../../assets/img/Jakarta.jpg" alt="Jakarta">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/destinasi/jakarta.php">Jakarta</a></h3>
                    <p>14,249 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Bandung.jpg" alt="Bandung">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/destinasi/bandung.php">Bandung</a></h3>
                    <p>7,196 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Yogyakarta.jpg" alt="Yogyakarta">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/destinasi/yogyakarta.php">Yogyakarta</a></h3>
                    <p>5,503 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Surabaya.jpg" alt="Surabaya">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/destinasi/surabaya.php">Surabaya</a></h3>
                    <p>3,145 akomodasi</p>
                </div>
            </div>
        </div>
        
        <h2>Destinasi populer di luar Indonesia</h2>
        <div class="hotel-list">
            <div class="hotel-card">
                <img src="../../assets/img/Kuala Lumpur.jpg" alt="Kuala Lumpur">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/akomodasi/kuala-lumpur.php">Kuala Lumpu</a>r</h3>
                    <p>19,902 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Tokyo.jpg" alt="Tokyo">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/akomodasi/tokyo.php">Tokyo</a></h3>
                    <p>12,486 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/JohorBahru.jpg" alt="Johor Bahru">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/akomodasi/johor-bahru.php">Johor Bahru</a></h3>
                    <p>6,994 akomodasi</p>
                </div>
            </div>
            <div class="hotel-card">
                <img src="../../assets/img/Penang.jpg" alt="Penang">
                <div class="hotel-info">
                    <h3><a href="../pelanggan/akomodasi/penang.php">Penang</a></h3>
                    <p>5,161 akomodasi</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2><a href="index.php" style="text-decoration: none; color: #00A8E8;">Traveloka</a></h2>
                <button class="partner-btn">Jadi Partner Traveloka</button>
                <div class="payment-partners">
                    <img src="../../assets/img/Visa.jpg" alt="Visa">
                    <img src="../../assets/img/MasterCard.png" alt="Mastercard">
                    <img src="../../assets/img/BCA.png" alt="BCA">
                    <img src="../../assets/img/BNI.jpg" alt="BNI">
                </div>
            </div>
            <div class="footer-section">
                <h3>Tentang Traveloka</h3>
                <ul>
                    <li><a href="carapesan/tiket-pesawat.php">Cara Pesan</a></li>
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
                    <li><a href="https://web.facebook.com/profile.php?id=100063583705251&locale=id_ID">Facebook</a></li>
                    <li><a href="https://www.instagram.com/malik.ar_20/">Instagram</a></li>
                    <li><a href="https://www.tiktok.com/@n0xies">TikTok</a></li>
                    <li><a href="https://www.youtube.com/@malikyeager5769">YouTube</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>