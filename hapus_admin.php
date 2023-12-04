<?php
include 'koneksi.php';

$id_admin = $_GET['id'];
mysqli_query($koneksi,"delete from admin where id_admin='$id_admin'");

header("location:data_admin.php");
?>