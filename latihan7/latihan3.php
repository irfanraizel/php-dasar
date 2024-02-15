<?php
if (
    !isset($_GET["brand"]) ||
    !isset($_GET["tipe"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["berat"]) ||
    !isset($_GET["gambar"])
) {
    header("Location: https://saweria.co/irfanrz");
    exit;
}
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helmets</title>
</head>

<body>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>">
        </li>
        <li><?= $_GET["brand"]; ?></li>
        <li><?= $_GET["tipe"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
        <li><?= $_GET["berat"]; ?></li>

        <a href="latihan2.php">Kembali</a>
    </ul>
</body>

</html>