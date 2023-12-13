<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $gambar = $_POST["gambar"];
    $judul = $_POST["judul"];

    // Lakukan update data di database sesuai dengan ID
    $sql = "UPDATE informasi SET img='$gambar', judul='$judul' WHERE id=$id";
    $result = $conn->query($sql);

    if ($result) {
        echo "Data berhasil diupdate";
    } else {
        echo "Gagal mengupdate data: " . $conn->error;
    }
} else {
    echo "Invalid request";
}