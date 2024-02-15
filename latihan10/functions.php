<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query_insert = "INSERT INTO mahasiswa
        VALUES
        ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query_insert);

    return mysqli_affected_rows($conn);
}

// function hapus data
function hapus($no) {
    global $conn;
    // query delete data
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $no ");
    return mysqli_affected_rows($conn);
}

?>