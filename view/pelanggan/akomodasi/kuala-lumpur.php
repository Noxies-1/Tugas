<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agoda Clone</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #f5f5f5;
}
.results {
    padding: 30px;
}

.hotel-card {
    background: white;
    display: flex;
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.hotel-card img {
    width: 250px;
    height: auto;
}

.hotel-info {
    flex-grow: 1;
    padding: 15px;
}

.hotel-info h2 {
    margin-top: 0;
}

.hotel-info .stars {
    color:#5392f9;
    margin: 10px 0;
}

.features span {
    background: #eee;
    padding: 5px 8px;
    margin-right: 5px;
    border-radius: 5px;
    font-size: 12px;
}

.price {
    padding: 15px;
    text-align: right;
}

.price h3 {
    color: red;
    margin: 10px 0;
}

.price button {
    background: #4a7cff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
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
<body>
    <section class="results">
        <div class="hotel-card">
            <img src="../../../assets/img/Sleeping Lion.jpg" alt="Hotel 1">
            <div class="hotel-info">
                <h2>Sleeping Lion Suites</h2>
                <p class="stars">⭐⭐⭐ <span><i class="fa fa-map-marker-alt"></i> Bukit Bintang, Kuala Lumpur</span></p>
                <div class="features">
                    <span>Free Wi-Fi</span>
                    <span>Swimming pool</span>
                    <span>Car park</span>
                    <span>+5</span>
                </div>
                <p>"Hot location, smack in the middle of Bukit Bintang"</p>
            </div>
            <div class="price">
                <div class="rating">9<br><small>Exceptional</small></div>
                <p>Avg price per night</p>
                <h3>Rp 948,513</h3>
                <button>Check availability</button>
            </div>
        </div>

        <div class="hotel-card">
            <img src="../../../assets/img/Cititel.jpg" alt="Hotel 2">
            <div class="hotel-info">
                <h2>Cititel Mid Valley Hotel</h2>
                <p class="stars">⭐⭐⭐ <span><i class="fa fa-map-marker-alt"></i> Mid Valley / Bangsar, Kuala Lumpur</span></p>
                <div class="features">
                    <span>Free Wi-Fi</span>
                    <span>Car park</span>
                    <span>Front desk [24-hour]</span>
                </div>
                <p>"I have been stayed in Malaysia, especially in Kuala Lumpur many times..."</p>
            </div>
            <div class="price">
                <div class="rating">8.2<br><small>Excellent</small></div>
                <p>Avg price per night</p>
                <h3>Rp 1,061,840</h3>
                <button>Check availability</button>
            </div>
        </div>

        <div class="hotel-card">
            <img src="../../../assets/img/Amari KualaLumpur.jpg" alt="Hotel 3">
            <div class="hotel-info">
                <h2>Amari Kuala Lumpur</h2>
                <p class="stars">⭐⭐⭐ <span><i class="fa fa-map-marker-alt"></i> Mid Valley / Bangsar, Kuala Lumpur</span></p>
                <div class="features">
                    <span>Free Wi-Fi</span>
                    <span>Pool with view</span>
                    <span>Car park</span>
                    <span>+5</span>
                </div>
                <p>"Amazing hotel with great room"</p>
            </div>
            <div class="price">
                <div class="rating">9<br><small>Exceptional</small></div>
                <p>Avg price per night</p>
                <h3>Rp 1,905,644</h3>
                <button>Check availability</button>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2><a href="../index.php" style="text-decoration: none; color: #00A8E8;">Traveloka</a></h2>
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
