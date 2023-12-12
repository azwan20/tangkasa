<?php
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameReg = $_POST['username'];
    $nama = $_POST['nama'];
    $passwordReg = $_POST['password'];
    // Hash the password for security
    $hashedPassword = password_hash($passwordReg, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql = "insert into registrasi  (nama, username, password) VALUES ('$usernameReg', '$nama', '$passwordReg')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil disimpan";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
