<?php
session_start();
include 'connect.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah email sudah ada
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = 'Email sudah terdaftar';
        header("Location: reg.php");
    } else {
        // Insert data
        $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = 'Registrasi berhasil';
            header("Location: log.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>