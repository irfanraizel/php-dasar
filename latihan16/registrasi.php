<?php
require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User Baru Berhasil Ditambahkan');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_errno($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <h1>HALAMAN REGISTRASI</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" autofocus>
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
            <li>
                <button type="reset" name="reset">Reset</button>
            </li>
            <li>
                <p>Sudah Punya Akun? login disini</p>
                <button><a href="login.php">Login</a></button>
            </li>
        </ul>
    </form>

</body>

</html>