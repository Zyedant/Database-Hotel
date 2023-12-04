<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Edit Data Pelanggan</h3>

<?php
include 'koneksi.php';
$id_pelanggan = $_GET['id'];
$data_pelanggan = mysqli_query($koneksi,"select * from pelanggan where id_pelanggan='$id_pelanggan'");
while($tampil=mysqli_fetch_array($data_pelanggan)) {
?>
<form method="post" action="edit_aksi_pelanggan.php">
    <table>
        <tr>
            <td>No Pelanggan</td>
            <td><input type="number" name="nopel" value="<?php echo $tampil['id_pelanggan']; ?>"> </td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $tampil['email']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $tampil['password']; ?>"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="number" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<?php
}
?>