<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="//www.upj.ac.id/web/templates/assets/images/favicon.png">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/styles/style.css?v=<?php echo time(); ?>">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Beranda</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-custom navbar-light fw-bold">
            <div class="col-sm-3">
                <a class="navbar-brand text-white" href="index.php" style="font-size: 13px; font-weight: bold;"><img class="img-responsive" src="../assets/img/upj_logo.png" alt="Logo UPJ" style="width: 80px; margin-right: 8px;">PMB Universitas Pembangunan Jaya</a>

            <!-- Reponsive Hamburger Menu-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            </div>

            <!-- Nav Bar -->
            <div class="col-sm-6">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#jalurSeleksi">Jalur Seleksi</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Program Studi</a>
                        <a class="dropdown-item" href="#">Pengumuman</a>
                        <a class="dropdown-item" href="#">Informasi Pendaftaran</a>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-3">
              <div class="moto-section d-flex flex-column">
                <h18 class="moto-a d-flex justify-content-end" style="color: #0082C8;padding-right: 1rem;">INTEGRITY</h18>    
            
                <h18 class="moto-b d-flex justify-content-end" style="color: #077B48;padding-right: 1rem;">PROFESSIONALISM</h18>    
            
                <h18 class="moto-c d-flex justify-content-end" style="color: #EE1C24;padding-right: 1rem;">ENTREPRENEURSHIP</h18>
                </div>
            </div>
        </nav>
        </div>
</body>
</html>