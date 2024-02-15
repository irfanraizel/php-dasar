<?php
$hewan = ["anjing", "cicak", "burung", "kucing", "beruang", "jembut"];
$mahasiswa = [["Irfan", "14012200134", "Ilmu Komputer", "irfanraizel@gmail.com"], ["Erenix", "14012200135", "Sistem Informasi", "erenix@yahoo.com"]];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5</title>
    <style>
        .kotak {
            width: 80px;
            height: 80px;
            background-color: aqua;
            text-align: center;
            line-height: 60px;
            margin: 3px;
            float: left;
            font-size: 20px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- menggunakan for -->
    <?php for ($i = 0; $i < count($hewan); $i++) : ?>
        <div class="kotak"> <?= $hewan[$i]; ?> </div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- menggunakan foreach -->
    <?php foreach ($hewan as $hwn) : ?>
        <div class="kotak"><?= $hwn ?></div>
    <?php endforeach; ?>


    <div class="clear"></div>

    <!-- menggunakan foreach untuk array di dalam array -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs[0] ?></li>
            <li><?php echo $mhs[1] ?></li>
            <li><?php echo $mhs[2] ?></li>
            <li><?php echo $mhs[3] ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="clear"></div>


    <!-- menggunakan for unruk array di dalam array -->
    <ul>
        <?php for ($j = 0; $j < count($mahasiswa); $j++) : ?>
                <li> <?php echo $mahasiswa[$j][0] ?> </li>
                <li> <?php echo $mahasiswa[$j][1] ?> </li>
                <li> <?php echo $mahasiswa[$j][2] ?> </li>
                <li> <?php echo $mahasiswa[$j][3] ?> </li>
        <?php endfor; ?>
    </ul>

</body>

</html>