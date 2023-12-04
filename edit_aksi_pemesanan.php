<?php
include 'koneksi.php';

$pemesanan = $_POST['nopem'];
$pelanggan = $_POST['nopel'];
$kamar = $_POST['nokam'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

mysqli_query($koneksi,"update pemesanan set id_pemesanan='$pemesanan', id_pelanggan='$pelanggan', id_kamar='$kamar', tanggal_checkin='$checkin', tanggal_checkout='$checkout' where id_pemesanan='$pemesanan'");
header("location:data_pemesanan.php");
?>