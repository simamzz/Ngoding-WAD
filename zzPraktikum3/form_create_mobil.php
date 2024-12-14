<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center">Tambah Mobil</h2>
        <form action="create.php" method="POST">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required>
            </div>
            <div class="mb-3">
                <label for="brand_mobil" class="form-label">Brand Mobil</label>
                <input type="text" class="form-control" id="brand_mobil" name="brand_mobil" required>
            </div>
            <div class="mb-3">
                <label for="warna_mobil" class="form-label">Warna Mobil</label>
                <input type="text" class="form-control" id="warna_mobil" name="warna_mobil" required>
            </div>
            <div class="mb-3">
                <label for="tipe_mobil" class="form-label">Tipe Mobil</label>
                <input type="text" class="form-control" id="tipe_mobil" name="tipe_mobil" required>
            </div>
            <div class="mb-3">
                <label for="harga_mobil" class="form-label">Harga Mobil</label>
                <input type="number" class="form-control" id="harga_mobil" name="harga_mobil" required>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>