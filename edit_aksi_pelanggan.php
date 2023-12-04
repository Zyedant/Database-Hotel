<?php
include 'koneksi.php';

$id_pelanggan = $_POST['nopel'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$telepon = $_POST['telepon'];

mysqli_query($koneksi,"update pelanggan set id_pelanggan='$id_pelanggan', nama='$nama', email='$email', password='$password', telepon='$telepon' where id_pelanggan='$id_pelanggan'");
header("location:data_pelanggan.php");
?>