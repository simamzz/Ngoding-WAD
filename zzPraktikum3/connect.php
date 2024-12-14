<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_wad_modul3"; // Ganti dengan nama database yang sesuai
$port = "3306";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
