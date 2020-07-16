<?php
    include "connect.php";

    $sql = "SELECT * FROM produk";
    $result = $connect->query($sql);

    foreach($result as $result) {
        $id = $result["id"];
        $nama_produk = $result["nama_produk"];
        $keterangan = $result["keterangan"];
        $harga = $result["harga"];
        $jumlah = $result["jumlah"];

        echo 
        "id : ".$id,
        " nama_produk : ".$nama_produk,
        " keterangan : ".$keterangan,
        " harga : ".$harga,
        " jumlah : ".$jumlah;
    }
?>