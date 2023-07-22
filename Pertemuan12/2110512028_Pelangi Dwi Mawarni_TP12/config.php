<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}