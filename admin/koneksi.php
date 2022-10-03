<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "jumanji.123";
$dBName = "web22";

// mysli digunakan untuk procedural PHP, pdo, dan juga OOP PHP
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// Kondisi jika $conn == false
if(!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}