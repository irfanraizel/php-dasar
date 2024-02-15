<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_todolist_php";

$conn = mysqli_connect($host, $user, $password, $db);

if (isset($conn)) {
    echo "berhasil konek";
} else {
    die;
}