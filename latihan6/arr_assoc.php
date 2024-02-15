<!-- ARRAY ASSOCIATIVE -->
<!-- Array assoc sama seperti array Numeric, perbedaan nya -->
<!-- Key pada array assoc adalah string yang kita buat sendiri -->
<?php
$mahasiswa = [
    ["nama" => "Irfan Raizel", "npm" => "14012200134", "jurusan" => "Ilmu Komputer", "email" => "irfanraizel@gmail.com", "gambar" => "avatarIrfan.jpg"],
    ["nama" => "Afrink Waluyo", "npm" => "14022200004", "jurusan" => "Ilmu Sejarah", "email" => "afrofink@gmail.com", "gambar" => "avatarAfrink.jpg"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arr assoc</title>
    <link rel="icon" type="image/x-icon" href="img/avatarboy.jpg">
</head>

<body>
    <h1>Array Assoc</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>"  >
            </li>
            <li><?= $mhs["nama"];  ?></li>
            <li><?= $mhs["jurusan"];  ?></li>
            <li><?= $mhs["npm"];  ?></li>
            <li><?= $mhs["email"];  ?></li>
        </ul>
        
    <?php endforeach; ?>

</body>

</html>