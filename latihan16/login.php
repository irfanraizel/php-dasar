<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
}

require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $confirmUsername = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // username checking
    if (mysqli_num_rows($confirmUsername) === 1) {

        // password checking
        $row = mysqli_fetch_assoc($confirmUsername);

        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            echo "<script>
                        alert('Anda Berhasil Login');
                        document.location.href='index.php';
                     </script>";
        } else {
            echo "<script>
                        alert('Username / Password Salah!');
                        document.location.href='login.php';
                     </script>";
            exit;
        }
    } else {
        echo "<script>
                alert('Username / Password Salah!');
                document.location.href='login.php';
              </script>";
        exit;
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            margin-top: 10px;
            display: block;
        }

        li {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>Login</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" autofocus autocomplete="off">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <li>
                <p>Belum Punya Akun? Daftar Disini</p>
            </li>
            <li>
                <button name="Register"><a href="registrasi.php">Register</a></button>
            </li>
        </ul>

    </form>

</body>

</html>