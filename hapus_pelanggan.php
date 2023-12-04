<?php
include 'koneksi.php';

$id_pelanggan = $_GET['id'];
mysqli_query($koneksi,"delete from pelanggan where id_pelanggan='$id_pelanggan'");

header("location:data_pelanggan.php");
?>