<?php

include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idAdmin = $_POST["idAdmin"];
    $idLA = $_POST["idLA"];
    $newName = $_POST["name"];
    $newAddress = $_POST["address"];
    $newPhone = $_POST["phone"];
    $newGender = $_POST["gender"];
    $newUsername = $_POST["username"];
    $newPassword = $_POST["password"];

    $sql = "UPDATE admin SET nama = '$newName', nama_bsu = '$newAddress', id_bsu = '$newPhone', jenis_kelamin = '$newGender' WHERE id = $idAdmin";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "Profile data updated successfully";
    } else {
        echo "Error updating profile data: " . $conn->error;
    }

    $sql2 = "UPDATE login SET username = '$newUsername', password = '$newPassword' WHERE id = $idLA";
   
    if ($conn->query($sql2) === TRUE) {
        echo "Profile data updated successfully";
    } else {
        echo "Error updating profile data: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}

?>
