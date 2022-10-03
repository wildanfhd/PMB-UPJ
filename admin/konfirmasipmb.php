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
    <title>Simpan Data</title>
</head>
<body>
    <?php
        require_once "header.php";
        echo "<link rel='stylesheet' type='text/css' href='../styles/style.css' />";
        include "koneksi.php";

        if(isset($_POST['nama_lengkap'])) {
            // $mhsID = $_POST['mhs_id'];
            $namaLengkap = $_POST['nama_lengkap'];
            $jenisKelamin = $_POST['jenis_kelamin'];
            $noHP = $_POST['no_hp'];
            $alamatEmail = $_POST['alamat_email'];
            $tanggalLahir = $_POST['tanggal_lahir'];
            $tempatLahir = $_POST['tempat_lahir'];
            $kewarganegaraan = $_POST['kewarganegaraan'];
            $nikNoKtp = $_POST['nik_noktp'];
            $querySQL = "INSERT INTO mhsbaru('nama_lengkap', 'jenis_kelamin', 'no_hp', alamat_email', 'tanggal_lahir', 'tempat_lahir', 'kewarganegaraan', 'nik_noktp') VALUES($namaLengkap, $jenisKelamin, $noHP, $alamatEmail, $tanggalLahir, $tempatLahir, $kewarganegaraan, $nikNoKtp)";
            $execSQL = mysqli_query($conn, $querySQL);
        }
    ?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-12">
            <p>
                <?php
                    if($execSQL) {
                        $lastId = mysqli_insert_id($conn);
                        echo "Data dengan ID $lastId berhasil diinput ke dalam database";
                    } else {
                        echo "Data tidak berhasil diinput ke dalam database";
                    }
                ?>
            </p>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>