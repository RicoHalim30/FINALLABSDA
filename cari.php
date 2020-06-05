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
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <title>cari Editor</title>
    <style>
    nav,
    .btn {
        background: RGB(34, 45, 109);
    }

    .navbar-brand,
    .nav-link,
    .fas {
        color: RGB(248, 180, 193);
    }

    body,
    .list-group-item {
        background: RGB(244, 241, 234);
    }

    .mb-3 {
        color: RGB(34, 45, 109);
        font-family: 'Old Standard TT', serif;
    }

    .list-group-item {
        color: RGB(24, 164, 224);
        font-family: 'Caveat', cursive;
    }

    .list-group-item:hover {
        color: RGB(248, 180, 193);
        font-family: 'Caveat', cursive;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="input-group mb-3 mt-5 w-50 mx-auto">
                    <input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control input"
                        placeholder="Nama Editor" type="text">
                    <div class="input-group-append">
                        <a class="btn btn-primary search text-white" id="button-addon2" type="button">
                            <i class="fas fa-search">CARI
                            </i>
                        </a>
                    </div>
                    </input>
                </div>
                <hr class="my-4">
                </hr>
                <div class="result text-center">
                </div>
            </div>
        </div>
    </div>
    <script src="assets\bootstrap\js\jquery.min.js">
    </script>
    <script src="assets\bootstrap\js\bootstrap.min.js">
    </script>
    <script>
    $(".search").click(function() {
        let loading = '<img alt="loading......" class="ml-auto" src="assets\\img\\loading.gif" width="30%">'
        $(".result").html(loading);
        loadData();
    });

    function loadData() {
        $.get('core/get.php?q="' + $(".input").val() + '"', function(data) {
            $(".result").html(data);
        });
    }
    </script>
</body>

</html>