<?php

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newId = $_POST["id"];
    $newName = $_POST["name"];
    $newUmur = $_POST["umurN"];
    $newJk = $_POST["jkN"];
    $newAlamat = $_POST["alamatN"];
    $newUsername = $_POST["usernameN"];
    $newPassword = $_POST["passwordN"];

    $sql = "UPDATE registrasi SET 
                nama = '$newName', 
                umur = '$newUmur', 
                jenis_kelamin = '$newJk', 
                alamat = '$newAlamat', 
                username = '$newUsername', 
                password = '$newPassword' 
            WHERE id = $newId";

    if ($conn->query($sql) === TRUE) {
        echo "Profile data updated successfully";
    } else {
        echo "Error updating profile data: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}
?>
