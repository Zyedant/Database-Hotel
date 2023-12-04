<?php
include 'koneksi.php';

$pemesanan = $_POST['nopem'];
$pelanggan = $_POST['nopel'];
$kamar = $_POST['nokam'];
$in = $_POST['checkin'];
$out = $_POST['checkout'];

mysqli_query($koneksi,"insert into pemesanan values('$pemesanan','$pelanggan','$kamar','$in','$out')");
header("location:data_pemesanan.php");
?>