<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


// ambil data (fecth) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object() mengembalikan object
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .id {
            background-color: pink;
        }

        .modif {
            text-decoration: none;
            font-family: poppins;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td class="id"><?= $row["id"] ?></td>
                <td class="modif">
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" width="50px"></td>
                <td><?= $row["npm"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>