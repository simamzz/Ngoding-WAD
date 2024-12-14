<?php
session_start();
include 'connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk cek data
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama'];

            // Remember Me
            if (isset($_POST['remember'])) {
                setcookie("id", $row['id'], time() + (86400 * 30), "/");
            }

            header("Location: dashboard.php");
        } else {
            $_SESSION['message'] = 'Password salah';
            header("Location: log.php");
        }
    } else {
        $_SESSION['message'] = 'Email tidak terdaftar';
        header("Location: log.php");
    }
}
?>