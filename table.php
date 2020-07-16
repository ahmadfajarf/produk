<?php 
    include "connect.php";

    $sql = "CREATE TABLE produk(
        id int PRIMARY KEY,
        nama_produk varchar(50),
        keterangan varchar(50),
        harga int,
        jumlah int

    )";

    if ( $connect->query($sql) == TRUE ) {
        echo "Table berhasil dibuat";
    } else {
        echo "Table gagal dibuat";
    }
?>