<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Helm</title>
    <style>

    </style>
</head>

<body>

    <?php
    $helmets = [
        ["brand" => "KYT", "tipe" => "KYT R10", "warna" => "putih", "berat" => "1,6kg", "gambar" => "kytR10.jpg"],
        ["brand" => "INK", "tipe" => "INK CX22", "warna" => "pink", "berat" => "1,4kg", "gambar" => "inkCx22.jpg"],
        ["brand" => "GM", "tipe" => "GM RC", "warna" => "kuning", "berat" => "1kg", "gambar" => "gmRC.jpg"],
        ["brand" => "shoei", "tipe" => "GT-Air", "warna" => "silver", "berat" => "1,5kg", "gambar" => "gtAir.jpg"],
        ["brand" => "MDS", "tipe" => "Pro Rider", "warna" => "putih", "berat" => "1,4kg", "gambar" => "mdsProRider.jpg"]
    ]
    ?>

    <?php foreach ($helmets as $helm) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $helm["gambar"] ?> ">
            </li>
            <li><?= $helm["brand"]; ?></li>
            <li><?= $helm["tipe"]; ?></li>
            <li><?= $helm["warna"]; ?></li>
            <li><?= $helm["berat"]; ?></li>
        </ul>
    <?php endforeach; ?>


    <?php 
        // $x ini variabel local untuk file atau halaman ini saja
        $x = 20;

        function showX() {
            // $x ini merupakan variabel local hanya untuk function showX() saja
            $x = 100;
            // gunakan "global" statement untuk mencari variabel diluar function
            global $x;
            echo $x;
        }

        showX();
        echo "<br>";
        echo $x;
    
    ?>
</body>

</html>