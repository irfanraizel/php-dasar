<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa
        WHERE
        nama LIKE '%$keyword%' OR
        npm LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'";

$mahasiswa = query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
