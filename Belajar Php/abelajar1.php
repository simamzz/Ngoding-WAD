<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center">Kalkulator BMI</h4>

                        <!-- PHP logic to handle form submission and BMI calculation -->
                        <?php
                        $hasil = $error = $status = '';

                        if ($_POST) {
                            $tinggi_badan = $_POST['tinggi_badan'];
                            $berat_badan = $_POST['berat_badan'];

                            // Validate input
                            if (empty($tinggi_badan) || empty($berat_badan)) {
                                $error = "Tinggi badan dan berat badan tidak boleh kosong.";
                            } elseif ($tinggi_badan <= 0 || $berat_badan <= 0) {
                                $error = "Nilai tinggi dan berat badan harus lebih dari 0.";
                            } else {
                                // Convert height to meters
                                $tinggi_badan_sekarang = $tinggi_badan / 100;
                                // Calculate BMI
                                $BMI = $berat_badan / ($tinggi_badan_sekarang * $tinggi_badan_sekarang);

                                // Determine BMI category
                                if ($BMI < 18.4) {
                                    $status = "Underweight";
                                } elseif ($BMI >= 18.5 && $BMI < 25) {
                                    $status = "Normal";
                                } elseif ($BMI >= 25 && $BMI < 30) {
                                    $status = "Overweight";
                                } else {
                                    $status = "Obese";
                                }

                                $hasil = number_format($BMI, 1); // Format BMI result to 1 decimal
                            }
                        }
                        ?>

                        <!-- Display Result or Error -->
                        <?php if (!empty($hasil)): ?>
                            <div class="alert alert-success text-center">BMI Anda: <?= $hasil ?> (Status: <?= $status ?>)
                            </div>
                        <?php elseif (!empty($error)): ?>
                            <div class="alert alert-danger text-center"><?= $error ?></div>
                        <?php endif; ?>

                        <!-- Form for BMI input -->
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan (CM)</label>
                                <input type="number" name="tinggi_badan" id="tinggi_badan" class="form-control"
                                    placeholder="175" value="<?= isset($tinggi_badan) ? $tinggi_badan : ''; ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="berat_badan">Berat Badan (KG)</label>
                                <input type="number" name="berat_badan" id="berat_badan" class="form-control"
                                    placeholder="70" value="<?= isset($berat_badan) ? $berat_badan : ''; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Hitung BMI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>