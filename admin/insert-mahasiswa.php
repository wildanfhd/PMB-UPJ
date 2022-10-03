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
    <title>Insert Data Mahasiswa</title>
</head>
<body>
    
    <?php
        require_once "header.php";
        echo "<link rel='stylesheet' type='text/css' href='../styles/style.css' />";

    ?>

<div class="container-fluid mt-5 mb-5">
    <div class="container card">
    <h3 class="text-center mt-3">Input Data Mahasiswa</h3>
    <form action="konfirmasipmb.php" method="post">
                <div class="row">
                    <!-- Nama Lengkap -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="namaLengkap" placeholder="Input Nama Lengkap" name="namaLengkap">
                                <label for="namaLengkap">Nama Lengkap</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Jenis Kelamin -->
                    <div class="col-md-6">
                        <div class="form-group">
                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" aria-label="Default select example" name="jenisKelamin">
                                <option selected></option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <label for="jenis-kelamin">Jenis Kelamin</label>
                        </div>
                        </div>
                    </div>

                    <!-- No HP-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="nomorHP" placeholder="Input No HP" name="nomorHP">
                                <label for="noHP">No. HP</label>
                            </div>
                        </div>
                    </div>

                    <!-- Alamat Email -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="alamatEmail" placeholder="Input Alamat Email" name="alamatEmail">
                                <label for="alamatEmail">Alamat Email</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="tanggalLahir" placeholder="DD-MM-YYYY" name="tanggalLahir">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tempat Lahir -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="tempatLahir" placeholder="Input Tempat Lahir" name="tempatLahir">
                                <label for="tempatLahir">Tempat Lahir</label>
                            </div>
                        </div>
                    </div>

                <!-- Kewarganegaraan -->
                <div class="col-md-6">
                        <div class="form-group">
                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" aria-label="Default select example" name="kewarganegaraan">
                                <option selected>Indonesia</option>
                                <option value="SGP">Singapore</option>
                                <option value="MYS">Malaysia</option>
                                <option value="PHL">Filipina</option>
                                <option value="THA">Thailand</option>
                            </select>
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                        </div>
                        </div>
                    </div>


                <!-- NIK / No.KTP -->
                <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="nikNoKTP" placeholder="Input NIK/No KTP" name="nikNoKTP">
                                <label for="nikNoKTP">NIK / No KTP</label>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mb-3 mt-3">Simpan</button>
        </div>
    </form>
    </div>
</div>

</body>
</html>