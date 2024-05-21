<?php

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include'./koneksi.php';
$sql = "INSERT INTO buku(nama,no_telp,asal,pekerjaan,keperluan) VALUES('$nama','$no_telp','$asal','$pekerjaan','$keperluan')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=buku');</script>";
}