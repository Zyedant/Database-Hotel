<?php
include 'koneksi.php';

$id = $_POST['nokar'];
$jenis = $_POST['jenis'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
$tersedia = $_POST['tersedia'];
$foto = $_POST['foto'];

mysqli_query($koneksi,"insert into kamar values('$id','$jenis','$fasilitas','$harga','$tersedia','$foto')");
header("location:data_kamar.php");
?>