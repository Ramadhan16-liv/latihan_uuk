<?php

$koneksi= mysqli_connect('localhost','root','','db_ramadhan');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}