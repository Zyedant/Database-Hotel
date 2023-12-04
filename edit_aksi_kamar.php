<?php
include 'koneksi.php';

$id_kamar = $_POST['nokar'];
$jenis = $_POST['jenis'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
$tersedia = $_POST['tersedia'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi,"update kamar set id_kamar='$id_kamar', jenis_kamar='$jenis', fasilitas='$fasilitas', harga='$harga', tersedia='$tersedia', gambar_kamar='$gambar' where id_kamar='$id_kamar'");
header("location:data_kamar.php");
?>