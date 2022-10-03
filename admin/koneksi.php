<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "web22";

// mysli digunakan untuk procedural PHP, pdo, dan juga OOP PHP
$koneksi = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// Kondisi jika $koneksi== false
if(!$koneksi) {
    die("Connection failed : " . mysqli_connect_error());
}
?>