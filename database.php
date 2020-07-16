<?php 
    include "connect.php";

    $sql = "CREATE DATABASE arkademy";

    if ( $connect->query($sql) === TRUE ) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat";
    }
?>