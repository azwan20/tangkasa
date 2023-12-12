<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM registrasi WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        header("location: login.php?error=1");
    }
    mysqli_close($conn);
}
?>
