<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Edit Data Kamar</h3>

<?php
include 'koneksi.php';
$id_kamar = $_GET['id'];
$data_kamar = mysqli_query($koneksi,"select * from kamar where id_kamar='$id_kamar'");
while($tampil=mysqli_fetch_array($data_kamar)) {
?>
<form method="post" action="edit_aksi_kamar.php">
    <table>
        <tr>
            <td>No Kamar</td>
            <td><input type="number" name="nokar" value="<?php echo $tampil['id_kamar']; ?>"> </td>
        </tr>
        <tr>
            <td>Jenis Kamar</td>
            <td><input type="text" name="jenis" value="<?php echo $tampil['jenis_kamar']; ?>"></td>
        </tr>
        <tr>
            <td>Fasilitas</td>
            <td><input type="text" name="fasilitas" value="<?php echo $tampil['fasilitas']; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <input type="radio" name="tersedia" value="<?php echo $tampil['tersedia']; ?>">
                <label for="tersedia">Tersedia</label>
                <input type="radio" name="tersedia" value="<?php echo $tampil['tersedia']; ?>">
                <label for="tersedia">Tidak Tersedia</label>
            </td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="text" name="gambar" value="<?php echo $tampil['gambar_kamar']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

<?php
}
?>