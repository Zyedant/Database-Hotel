<?php
include 'koneksi.php';

$id = $_POST['noad'];
$nama = $_POST['nama'];
$password = $_POST['password'];;

mysqli_query($koneksi,"insert into admin values('$id','$nama','$password')");
header("location:data_admin.php");
?>