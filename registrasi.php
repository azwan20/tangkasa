<?php
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameReg = $_POST['username'];
    $namaReg = $_POST['nama'];
    $passwordReg = $_POST['password'];

    $hashedPassword = password_hash($passwordReg, PASSWORD_DEFAULT);

    $sql6 = "insert into registrasi  (nama, username, password) VALUES ('$usernameReg', '$namaReg', '$passwordReg')";
    if(mysqli_query($conn, $sql6)){
        echo "Data berhasil disimpan";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql6 . "<br>" . mysqli_error($conn);
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">

    <!-- bostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="login d-flex">
        <div class="loginItem d-flex">
            <div class="right">
                <span class="d-flex">
                    <img src="style/image/login2.svg" width="200px" height="200px">
                </span>
                <form action="" method="post">
                    <span class="d-flex" style="height: 150px;">
                        <input type="text" placeholder="Full Name" name="nama" required> <br>
                        <input type="text" placeholder="Username" name="username" required> <br>
                        <input type="password" placeholder="Password" name="password" required>
                    </span>
                    <button type="submit">REGISTER</button>
                </form>
                <div class="bottom">
                    <p>Forgot Password</p>
                    <a href="login_admin.php">Pengelola Login</a>
                </div>
                <hr style="margin: auto 50px 25px;">
                <span class="d-flex">
                    <h4>Nasabah Registrasi</h4>
                </span>
            </div>
        </div>

    </div>
</body>

</html>