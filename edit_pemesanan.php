<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Edit Data Pemesanan</h3>

<?php
include 'koneksi.php';
$id_pemesanan = $_GET['id'];
$data_pemesanan = mysqli_query($koneksi,"select * from pemesanan where id_pemesanan='$id_pemesanan'");
while($tampil=mysqli_fetch_array($data_pemesanan)) {
?>
<form method="post" action="edit_aksi_pemesanan.php">
    <table>
        <tr>
            <td>No Pemesanan</td>
            <td><input type="number" name="nopem" value="<?php echo $tampil['id_pemesanan']; ?>"> </td>
        </tr>
        <tr>
            <td>No Pelanggan</td>
            <td><input type="number" name="nopel" value="<?php echo $tampil['id_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>No Kamar</td>
            <td><input type="number" name="nokam" value="<?php echo $tampil['id_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Checkin</td>
            <td><input type="date" name="checkin" value="<?php echo $tampil['tanggal_checkin']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Checkout</td>
            <td><input type="date" name="checkout" value="<?php echo $tampil['tanggal_checkout']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<?php
}
?>