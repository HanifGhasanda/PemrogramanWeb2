<?php

    $koneksi = mysqli_connect("localhost","root","","db_transaksi");

    if(!$koneksi){
        echo"Koneksi Gagal";
    }

?>