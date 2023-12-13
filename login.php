<?php

include 'koneksi.php';

session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM registrasi WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["login"] = true;
        $_SESSION["id"] = $row['id'];
?>
<script>location.reload()</script>
<?php
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Sesuaikan dengan struktur folder Anda -->
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login d-flex">
        <div class="loginItem d-flex">
            <div class="right">
                <span class="d-flex">
                    <img src="style/image/login2.svg" width="200px" height="200px">
                </span>
                <form method="post" action="">
                    <span class="d-flex">
                        <input type="text" placeholder="Username" name="username" required> <br>
                        <input type="password" placeholder="Password" name="password" required>
                    </span>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
                <div class="bottom">
                    <p style="margin-bottom: 0">Forgot Password</p>
                    <a href="login_admin.php">Pengelola Login</a>
                </div>
                <p style="margin: 5px 50px">Belum punya akun? <a href="registrasi.php">klik disini</a></p>
                <hr style="margin: auto 50px 25px;">
                <span class="d-flex">
                    <h4>Nasabah Login</h4>
                </span>
                <?php if (isset($error)) { ?>
                    <p style="color: red; text-align: center;">Login failed. Please check your username and password.</p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>