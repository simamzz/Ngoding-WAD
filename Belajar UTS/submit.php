<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    // Validasi input 
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        echo "<h1>Terima kasih telah menghubungi kami, $nama!</h1>";
        echo "<p>Email: $email</p>";
        echo "<p>Pesan Anda: $pesan</p>";
    } else {
        echo "<p>Semua field harus diisi!</p>";
    }
}
?>


<!-- - Isi tanda `___(14)___` dengan metode HTTP yang 
sesuai (POST atau GET). -->