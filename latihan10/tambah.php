<?php
require "functions.php";
//cek apakah button submit sudah di tekan
if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambah / tidak
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil DitambahkaN!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal DitambahkaN!');
        document.location.href = 'index.php';
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            font-family: poppins;
        }

        li {
            margin: 10px;
            padding: 5px;
            list-style-type: none;
        }

        .tambah-button {
            position: fixed;
            left: 50px;
        }

        .text-batal {
            text-decoration: none;
            color: black;
        }

        .batal-button {
            position: relative;
            left: 190px;
            top: 10px;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li class="tambah-button">
                <button type="submit" name="submit">TAMBAH MAHASISWA</button>
            </li>
            <li class="batal-button">
                <button>
                    <a href="index.php" class="text-batal">BATAL</a>
                </button>
            </li>
        </ul>
    </form>


</body>

</html>