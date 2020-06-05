<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\fontawesome-free\css\all.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <title>Data Editor</title>
    <style>
    nav {
        background: RGB(34, 45, 109);
    }

    .navbar-brand,
    .nav-link {
        color: RGB(248, 180, 193);
    }

    body,
    .jumbotron {
        background: RGB(244, 241, 234);
    }

    .display-4 {
        text-align: center;
        color: RGB(24, 164, 224);
        font-family: 'Piedra', cursive;
    }

    .lead,
    .leads {
        text-align: center;
        color: RGB(34, 45, 109);
    }

    .lead {
        font-family: 'Dancing Script', cursive;
        font-size: 25px;
    }

    .leads {
        font-size: 16px;
        font-family: 'EB Garamond', serif;
    }

    .leadd {
        color: RGB(24, 164, 224);
        font-family: 'Caveat', cursive;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  ">
        <a class="navbar-brand font-weight-bold" href="#"><i class="fas fa-edit"></i> DATA EDITOR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cari.php">PENCARIAN EDITOR</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tampil.php">TAMPILKAN EDITOR</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">ABOUT ME</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron mb-0">
        <h1 class="display-4">Selamat Datang!</h1>
        <br>
        <p class="lead">"Data editor merupakan web yang menampilkan informasi <br> editor pada artikel situs detik.com
            beserta artikel yang telah diedit"
            <br>
            <h6 class="leads">Seluruh data yang diperoleh dibuat menggunakan struktur data hash yang telah terintegrasi
                dengan Web
            </h6>
        </p>
        <div class="text-center">
            <a class="btn btn-primary btn-lg" href="https://github.com/RicoHalim30/FINALLABSDA" role="button"><i
                    class="fab fa-github"></i> Kunjungi Github</a>
        </div>
        <hr class="my-4">
        <p class="leadd">Website ini dibuat untuk memenuhi tugas Projek Lab Matakuliah Struktur Data dan Algoritma
            Program Studi
            Informatika Unsyiah</p>

    </div>
    <!-- End Jumbotron -->

    <script src="assets\bootstrap\js\jquery.min.js"></script>
    <script src="assets\bootstrap\js\bootstrap.min.js"></script>

</body>

</html>