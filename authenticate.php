<?php
session_start();

// Dummy data untuk contoh
$valid_email = 'john.doe@example.com';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $valid_email && $password == $valid_password) {
        $_SESSION['user'] = [
            'name' => 'John Doe',
            'email' => $valid_email,
            'joined' => 'January 15, 2023',
        ];
        header("Location: index.php");
        exit();
    } else {
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
