<?php

include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idN = $_POST["idN"];
    $newName = $_POST["name"];
    $newAddress = $_POST["umurN"];
    $newPhone = $_POST["jkN"];
    $newGender = $_POST["alamatN"];
    $newUsername = $_POST["usernameN"];
    $newPassword = $_POST["passwordN"];

    $sql = "UPDATE registrasi SET nama = '$newName', umur = '$newAddress', jenis_kelamin = '$newPhone', alamat = '$newGender' WHERE id = '$idN'";
    
    
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
