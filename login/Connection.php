<?php
    $conn = mysqli_connect("localhost","root","","sistem");
    if (mysqli_connect_errno()){
        echo " Koneksi Data Base Gagal : ". mysqli_connect_error();
    }
?>