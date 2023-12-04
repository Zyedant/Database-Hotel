<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Edit Data Admin</h3>

<?php
include 'koneksi.php';
$id_admin = $_GET['id'];
$data_admin = mysqli_query($koneksi,"select * from admin where id_admin='$id_admin'");
while($tampil=mysqli_fetch_array($data_admin)) {
?>
<form method="post" action="edit_aksi_admin.php">
    <table>
        <tr>
            <td>No Admin</td>
            <td><input type="number" name="noad" value="<?php echo $tampil['id_admin']; ?>"> </td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $tampil['username']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $tampil['password']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<?php
}
?>