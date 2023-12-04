<?php
include 'koneksi.php';

$id_admin = $_POST['noad'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"update admin set id_admin='$id_admin', username='$username', password='$password' where id_admin='$id_admin'");
header("location:data_admin.php");
?>