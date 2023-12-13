<?php

include 'koneksi.php';

$sql = "SELECT * FROM informasi";
$result = $conn->query($sql);
?>

<div class="d-flex info" style= "flex-wrap: wrap;">
    <?php
    $counter = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $gambar = $row["img"];
            $judul = $row["judul"];
    ?>
            <div class="infoItem" style="width: 250px; box-sizing: border-box; margin-bottom: 40px;">
                <div class="infoIsi">
                    <div id="gambar"></div>
                    <img src="<?php echo $gambar; ?>" alt="<?php echo $judul; ?>" style="width: 100%;">
                </div>
                <p id="judul" style="text-align: center; color: #000; font-size: 22px; margin-top: 13px"><?php echo $judul; ?></p>
            </div>
        <?php
            $counter++;
            if ($counter % 3 == 0) {
                echo '</div><div class="d-flex info" style="margin-bottom: 40px; flex-wrap: wrap;">';
            }
        }
    } else {
        ?>
        <div class="infoItem">
            <div class="infoIsi">
                <img src="path_to_default_image.jpg" alt="Default Image" style="width: 100%;">
            </div>
            <p style="text-align: center;">Default Title</p>
        </div>
    <?php
    }
    ?>
</div>
<script>
    function setActiveLink(element) {
        var allLinks = document.querySelectorAll('.link');
        allLinks.forEach(link => {
            link.classList.remove('active');
        });

        element.classList.add('active');
    }
</script>