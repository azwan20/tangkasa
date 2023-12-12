<?php

include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $judulContent = $_POST["title"];
    $keterangan = $_POST["description"];

    $sql = "UPDATE content SET judul = '$judulContent', keterangan = '$keterangan' WHERE id = $id";
    
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
