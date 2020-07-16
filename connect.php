<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "arkademy";

    $connect = new mysqli($host, $username, $password, $db);

    if ( $connect->connect_error ) {
        die("koneksi ke database gagal");
    }
?>