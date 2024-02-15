<?php  
    require 'functions.php';

    $no = $_GET["id"];

    if ( hapus($no) > 0) {
        echo "<script>
            alert('Data Berhasil DiHapus!');
            document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
        alert('Data Gagal DiHapus!');
        document.location.href='index.php';
        </script>";
    }
    
?>