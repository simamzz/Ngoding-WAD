<?php
include("connect.php");

$query = "SELECT * FROM showroom_mobil";
$data = mysqli_query($conn, $query);
$cars = [];
while ($car = mysqli_fetch_assoc($data)) {
    $cars[] = $car;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container mt-5">
            <h1>List Mobil</h1>
            <table class="table align-middle table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($cars) == 0): ?>
                        <tr>
                            <th colspan="7" class="text-center">TIDAK ADA DATA</th>
                        </tr>
                    <?php endif; ?>

                    <?php foreach ($cars as $car): ?>
                        <tr>
                            <td><?= $car["id"] ?></td>
                            <td><?= $car["nama_mobil"] ?></td>
                            <td><?= $car["brand_mobil"] ?></td>
                            <td><?= $car["warna_mobil"] ?></td>
                            <td><?= $car["tipe_mobil"] ?></td>
                            <td><?= "Rp. " . number_format($car["harga_mobil"], 0, ',', '.') ?></td>
                            <td>
                                <a href="./form_detail_mobil.php?id=<?= $car["id"] ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>