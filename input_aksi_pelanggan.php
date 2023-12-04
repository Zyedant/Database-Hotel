<?php
include 'koneksi.php';

$id = $_POST['nopel'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$telpon = $_POST['telpon'];

mysqli_query($koneksi,"insert into pelanggan values('$id','$nama','$email','$password','$telpon')");
header("location:data_pelanggan.php");
?>