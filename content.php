<?php

include 'koneksi.php';

$sql = "SELECT * FROM content ";
$result = $conn->query($sql);
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    header {
        text-align: center;
        margin-bottom: 20px;
    }

    main {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .content-item {
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .content-item p,
    .content-item h2 {
        padding: 15px;
        margin: 0;
    }

    h2 {
        font-size: 1.2em;
        color: #333;
    }

    p {
        font-size: 0.9em;
        color: #666;
    }
</style>

<div class="container" id="contentContainer">
    <header>
        <h1>Konten Bank Sampah</h1>
    </header>
    <main>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $judulContent = $row["judul"];
                $keterangan = $row["keterangan"];
        ?>
                <section class="content-item" <?php echo $id; ?> >
                    <h2 id="judulContent"><?php echo $judulContent; ?></h2>
                    <p id="keterangan">
                        <?php echo $keterangan; ?>
                    </p>
                </section>
            <?php
            }
        } else {
            ?>
            <section class="content-item">
                <h2>Default</h2>
                <p>Default</p>
            </section>
        <?php
        }
        ?>
    </main>
</div>