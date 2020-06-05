<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\fontawesome-free\css\all.min.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <title>About Me</title>
    <style>
    nav,
    .btn {
        background: RGB(34, 45, 109);
    }

    .navbar-brand,
    .nav-link {
        color: RGB(248, 180, 193);
    }

    body {
        background: RGB(244, 241, 234);
    }

    table {
        font-family: 'Lobster Two', cursive;
        color: RGB(34, 45, 109);
        font-size: 20px;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand font-weight-bold" href="index.php">
            <i class="fas fa-edit">
            </i>
            DATA EDITOR
        </a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cari.php">
                        PENCARIAN EDITOR
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tampil.php">
                        TAMPILKAN EDITOR
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">
                        ABOUT ME
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container mt-5">
        <center>
            <table border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td>Nama</td>
                    <td>: Rico Halim</td>
                    <td rowspan="5"><img width="500" height="300" src="assets\\img\\rico.jpg" width="50%"></td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>: 30 April 2000</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: Mahasiswa</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>: Informatika</td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td>: Syiah Kuala</td>
                </tr>
            </table>
        </center>
    </div>
    <script src="assets\bootstrap\js\jquery.min.js">
    </script>
    <script src="assets\bootstrap\js\bootstrap.min.js">
    </script>
</body>

</html>