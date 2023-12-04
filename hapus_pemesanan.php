<?php
include 'koneksi.php';

$id_pemesanan = $_GET['id'];
mysqli_query($koneksi,"delete from pemesanan where id_pemesanan='$id_pemesanan'");

header("location:data_pemesanan.php");
?>