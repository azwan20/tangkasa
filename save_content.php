<?php

include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $newjudulContent = $_POST["judulContent"];
    $keterangan = $_POST["keterangan"];

    // Lakukan update data di database sesuai dengan ID
    $sql = "UPDATE content SET judul = '$newjudulContent', keterangan = '$keterangan' WHERE id = $id";
    $result = $conn->query($sql);

    
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
