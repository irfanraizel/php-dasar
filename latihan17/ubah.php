<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}


require "functions.php";

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah button submit sudah di tekan
if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah / tidak
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil DiUbah!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal DiUbah!');
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
    <title>Update Data Mahasiswa</title>
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

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
            
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <img src="img/<?= $mhs['gambar']; ?>" width="50px"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li class="tambah-button">
                <button type="submit" name="submit">UBAH MAHASISWA</button>
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