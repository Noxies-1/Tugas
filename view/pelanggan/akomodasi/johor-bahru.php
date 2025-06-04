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
.back-button-container {
  padding: 20px 30px;
}

    .back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    background-color: #f0f2f5;
    color: #333;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: all 0.2s ease-in-out;
    border: 1px solid #d0d0d0;
    }

    .back-button:hover {
    background-color: #dbe4f3;
    color: #1a73e8;
    box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    transform: translateY(-1px);
    }


</style>
<body>
    <div class="back-button-container">
    <a href="javascript:history.back()" class="back-button">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
    </div>

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

</body>
</html>
