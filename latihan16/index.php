<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if ( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: poppins;
            font-size: 13px;
        }

        .tambah-mhs:hover {
            background-color: pink;
        }


        .id {
            background-color: pink;
        }

        .modif {
            text-decoration: none;
            font-family: poppins;
            color: black;
        }

        .btn-tambah:hover {
            background-color: pink;
            transition: 0.5s;
        }
        
        .tr-judul {
            background-color: #ff9999 ;
        }

    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <button class="btn-tambah"> <a href="tambah.php" class="modif">Tambah Data Mahasiswa</a></button>
    <button><a href="logout.php">Logout</a></button>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Search" style="height: 20px;">
        <button type="submit" name="cari" style="height: 25px; width:50px; text-align:center;">Cari</button>
    </form>
    <br>
    <table border="1px" cellspacing="0" cellpadding="10px">
        <tr class="tr-judul">
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
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>" class="modif">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" class="modif" onclick="return confirm('Apakah ingin menghapus?')">Hapus</a>
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