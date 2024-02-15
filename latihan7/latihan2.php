<!-- VARIABEL SUPERBLOBALS -->
<!-- Var SUPERGLOBALS ini bertipe ARRAY ASSOCIATIVE -->

<!-- $_GET;
$_POST;
$_REQUEST;
$_SERVER;
$_COOKIE;
$_ENV;
$_FILES;
$_SESSION;
$GLOBALS; -->

<?php
$helmets = [
    ["brand" => "KYT", "tipe" => "KYT R10", "warna" => "putih", "berat" => "1,6kg", "gambar" => "kytR10.jpg"],
    ["brand" => "INK", "tipe" => "INK CX22", "warna" => "pink", "berat" => "1,4kg", "gambar" => "inkCx22.jpg"],
    ["brand" => "GM", "tipe" => "GM RC", "warna" => "kuning", "berat" => "1kg", "gambar" => "gmRC.jpg"],
    ["brand" => "SHOEI", "tipe" => "GT-Air", "warna" => "silver", "berat" => "1,5kg", "gambar" => "gtAir.jpg"],
    ["brand" => "MDS", "tipe" => "Pro Rider", "warna" => "putih", "berat" => "1,4kg", "gambar" => "mdsProRider.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/kytR10.jpg">
    <title>GET & POST</title>
</head>

<body>
    <h1>DAFTAR HELMETS</h1>
    <ul>
        <?php foreach ($helmets as $helm) : ?>
            <li>
                <a href="latihan3.php?brand=<?= $helm["brand"] ?>&tipe=<?= $helm["tipe"]; ?>&warna=<?= $helm["warna"]; ?>&berat=<?= $helm["berat"] ?>&gambar=<?= $helm["gambar"]; ?>"><?= $helm["brand"]; ?></a>
            </li>
        <?php endforeach; ?>
        <? var_dump($_GET); ?>
    </ul>
</body>

</html>