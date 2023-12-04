<?php
include 'koneksi.php';

$id_kamar = $_GET['id'];
mysqli_query($koneksi,"delete from kamar where id_kamar='$id_kamar'");

header("location:data_kamar.php");
?>