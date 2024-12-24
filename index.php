<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesona Bogor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> body
    .header {
        position: relative;
        text-align: center;
        color: white;
    }
    .header img {
        width: 100%;
        height: auto;
    }
    .header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .header h1 {
        font-size: 3em;
        margin: 0;
    }
    .header .btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }
    .header .scroll-down {
        margin-top: 20px;
        font-size: 1.5em;
    }
    .content {
        padding: 20px;
        background-color: #f8f9fa;
    }
    .content .article {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .content .article img {
        width: 100%;
        border-radius: 10px;
    }
    .content .article .details {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .content .article .details .info {
        flex: 1;
    }
    .content .article .details .price {
        flex: 1;
        text-align: right;
    }
    .content .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .content .gallery img {
        width: calc(33.333% - 10px);
        border-radius: 10px;
    }
    .content .gallery .btn {
        width: 100%;
        text-align: center;
        margin-top: 20px;
    }
    .footer {
        background-color: #343a40;
        color: white;
        padding: 20px;
    }
    .footer .container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .footer .container .column {
        flex: 1;
        margin: 10px;
    }
    .footer .container .column h3 {
        margin-top: 0;
    }
    .footer .container .column ul {
        list-style: none;
        padding: 0;
    }
    .footer .container .column ul li {
        margin-bottom: 10px;
    }
    .footer .container .column ul li a {
        color: white;
        text-decoration: none;
    }
    .footer .container .column ul li a:hover {
        text-decoration: underline;
    }
    .footer .social {
        text-align: center;
        margin-top: 20px;
    }
    .footer .social a {
        color: white;
        margin: 0 10px;
        text-decoration: none;
    }
    .footer .social a:hover {
        color: #007bff;
    }
    .footer .copyright {
        text-align: center;
        margin-top: 20px;
    }
    @media (max-width: 768px) {
        .content .gallery img {
        width: calc(50% - 10px);
        }
    }
    @media (max-width: 480px) {
    .content .gallery img {
        width: 100%;
        }
    }
    .gallery-img {
            border-radius: 15px;
            width: 100%;
            height: auto;
        }
        .detail-box, .contact-box {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary-custom {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 15px;
        }
        .btn-primary-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .social-btn {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-md fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#" style="color: orange">Pesona <span class="fw-bold" style="color: blue">Bogor</span></a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav nav-pills ms-auto">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="Main/Pemesanan/pemesanan.php" style="color: orange">Pemesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Destinasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="Main/Daftar/daftar.php" style="color: orange">Daftar Pemesanan</a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>

<body>
    <div class="header">
    <img src="Assets/Image/Header.jpg" alt="Villa Verre with a swimming pool and garden"/>
    <div class="overlay">
        <h1>Villa VERRE</h1>
        <button class="btn">Read More</button>
        <div class="scroll-down">
        <i class="fas fa-chevron-down"></i> Scroll Down to Continue
        </div>
    </div>
    </div>
    <div class="content">
    <div class="article">
        <img src="Assets/Image/News.jpg" alt="Villa Verre with a classic building and garden"/>
        <div class="details">
        <div class="info">
            <p><strong>July, 15, 2021 - Tips and Tricks</strong></p>
            <p>
              Villa Veere yang bernuansa klasik ini memiliki bangunan yang unik,
              area rumput yang luas juga bisa dijadikan tempat bermain anak-anak
              atau bermain fun futsal. Di Villa ini juga ada area permainan
              anak.
            </p>
            <p>
              Villa yang terdiri dari 6 kamar tidur ini, merupakan salah satu
              villa yang pas untuk kunjungan keluarga ataupun gathering kantor.
              Di villa ini Anda juga bisa membuat tenda dan merasakan camping di
              alam terbuka dengan rasa aman.
            </p>
            <p><i class="fas fa-map-marker-alt"></i> Cisarua, Bogor</p>
        </div>
        <div class="price">
            <p><strong>HARGA PERHARI</strong></p>
            <p>• MINGGU - KAMIS Rp.1.500.000</p>
            <p>• JUMAT Rp.1.800.000</p>
            <p>• SABTU & HARI LIBUR Rp.3.000.000</p>
            <p><i class="fas fa-comment"></i> Comment (52)</p>
        </div>
        </div>
    </div>
    <div class="container mt-5">
   <div class="text-center mb-4">
    <button class="btn btn-primary-custom">
     Galeri
    </button>
   </div>
   <div class="row">
    <div class="col-md-3 mb-4">
     <div class="detail-box">
      <h5>
       Detail
      </h5>
      <p>
       Kapistas Maksimal
       <span class="float-end">
        (30 Org)
       </span>
      </p>
      <p>
       Kamar Tidur
       <span class="float-end">
        (6 Kamar)
       </span>
      </p>
      <p>
       Kasur
       <span class="float-end">
        (6 Kasur)
       </span>
      </p>
      <p>
       Kamar Mandi
       <span class="float-end">
        (3 Kamar)
       </span>
      </p>
      <p>
       Parkir Mobil
       <span class="float-end">
        (6 Mobil)
       </span>
      </p>
     </div>
     <div class="contact-box mt-4">
      <h5>
       Get In Touch
      </h5>
      <button class="btn btn-primary social-btn">
       <i class="fab fa-facebook-f">
       </i>
       65.5K Likes
      </button>
      <button class="btn btn-info social-btn text-light">
       <i class="fab fa-twitter">
       </i>
       105K Followers
      </button>
      <button class="btn btn-danger social-btn">
       <i class="fab fa-youtube">
       </i>
       1.5M Subscribers
      </button>
      <button class="btn btn-pink social-btn text-light" style="background-color: #E14D93;">
       <i class="fab fa-instagram text-light">
       </i>
       85K Followers
      </button>
     </div>
    </div>
    <div class="col-md-9">
     <div class="row">
      <div class="col-md-4 mb-4">
       <img alt="Group of people sitting by the pool with mountains in the background" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Person standing by the pool with trees in the background" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Group of people standing on a grassy field with trees in the background" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Living room with sofas and a large window" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Outdoor area with a pool and a gazebo" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Driveway with a car and plants on the side" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
      <div class="col-md-4 mb-4">
       <img alt="Outdoor area with a pool table and a pool" class="gallery-img" height="200" src="Assets/Image/Kolam BL.jpg" width="300"/>
      </div>
     </div>
     <div class="text-center">
      <button class="btn btn-primary-custom">
       Semua Galeri
      </button>
     </div>
    </div>
   </div>
  </div>
    </div>
    <div class="footer">
    <div class="container">
        <div class="column">
        <h3>Pesona Bogor</h3>
        <p>
            We are location independent bloggers, digital influencers, email
            group tour organizers and world travelers with a serious passion for
            the sun, sea and adventure.
        </p>
        <p>
            Eight years and 60 something countries later and we are still on the
            road.
        </p>
        </div>
        <div class="column">
        <h3>Body</h3>
        <ul>
            <li>Jl. Pemuda Pancasila, Bogor, Jawa Barat</li>
            <li>+62 835 5674 8454</li>
            <li>info@pesonabogor.com</li>
            <li>www.pesonabogor.com</li>
        </ul>
        </div>
        <div class="column">
        <h3>Travel</h3>
        <ul>
            <li><a href="#">My List</a></li>
            <li><a href="#">My Requests</a></li>
            <li><a href="#">My Credits</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
        <div class="column">
        <h3>Account</h3>
        <ul>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Why Travel</a></li>
            <li><a href="#">Become a Traveler</a></li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Traveling FAQs</a></li>
        </ul>
        </div>
    </div>
    <div class="social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="copyright">
        <p>
        © 2024 Pesona Bogor. All rights reserved | Terms | Privacy | Site Map
        </p>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>