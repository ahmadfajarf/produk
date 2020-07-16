<?php
    include "connect.php";

    $sql = "INSERT INTO produk(
        id,
        nama_produk,
        keterangan,
        harga,
        jumlah
    ) VALUE
    (
        '1',
        'Pulsa',
        'Paket internet',
        '100000',
        '1'
    )";

    if ( $connect->query($sql) === TRUE) {
        echo "Insert data telah berhasil";
    } else {
        echo "insert data gagal";
    }
?>