<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include file koneksi
    include 'koneksi.php';

    // Ambil data yang dikirimkan dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lindungi dari SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Mengecek apakah data ditemukan
    if (mysqli_num_rows($result) == 1) {
        // Data ditemukan, set session dan redirect ke halaman sukses
        $_SESSION['username'] = $username;
        header("location: index_admin.php");
    } else {
        // Data tidak ditemukan, redirect ke halaman login dengan pesan error
        header("location: login.php?error=1");
    }

    // Menutup koneksi
    mysqli_close($conn);
}
?>
