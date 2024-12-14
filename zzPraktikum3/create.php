<?php
require "connect.php";

if (isset($_POST["create"])) {
    $carName = $_POST["nama_mobil"];
    $brandName = $_POST["brand_mobil"];
    $colorName = $_POST["warna_mobil"];
    $typeName = $_POST["tipe_mobil"];
    $price = $_POST["harga_mobil"];

    $query = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
              VALUES ('$carName', '$brandName', '$colorName', '$typeName', $price)";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_mobil.php");
        exit;
    } else {
        echo "<script>alert('Data failed'); window.location='list_mobil.php';</script>";
    }
}
?>