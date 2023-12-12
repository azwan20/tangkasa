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
                <form method="post" action="process_admin.php">
                    <span class="d-flex">
                        <input type="text" placeholder="Username" name="username" required> <br>
                        <input type="password" placeholder="Password" name="password" required>
                    </span>
                    <button type="submit">LOGIN</button>
                </form>
                <div class="bottom">
                    <p>Forgot Password</p>
                    <a href="#">Pengelola Login</a>
                </div>
                <hr style="margin: auto 50px 35px;">
                <span class="d-flex">
                    <h4>Nasabah Login</h4>
                </span>
                <?php
                // Menampilkan pesan error jika login gagal
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<p style="color: red;">Login failed. Please check your username and password.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
