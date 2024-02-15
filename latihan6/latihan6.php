<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assoc</title>
    <style>
        body {
            font-family: poppins;
        }

        .kotak {
            width: 100px;
            height: 100px;
            background-color: pink;
            text-align: center;
            line-height: 100px;
            margin: 10px;
            transition: 1s;
            float: left;
        }

        .kotak:hover {
            transform: rotateX(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];  ?>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>


    <div class="clear"></div>

    <!-- mencetak array multi dimensi menggunakan 2 foreach -->
    <?php $numbers = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]; ?>
    <?php foreach ($numbers as $n) : ?>
        <?php foreach ($n as $m) : ?>
            <div class="kotak"><?= $m; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>


</body>

</html>