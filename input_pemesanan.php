<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Tambah Data Barang</h3>

<form method="post" action="input_aksi_pemesanan.php">
    <table>
        <tr>
            <td>No Pemesanan</td>
            <td><input type="number" name="nopem"> </td>
        </tr>
        <tr>
            <td>No Pelanggan</td>
            <td><input type="number" name="nopel"></td>
        </tr>
        <tr>
            <td>No Kamar</td>
            <td><input type="number" name="nokam"></td>
        </tr>
        <tr>
            <td>Tanggal Checkin</td>
            <td><input type="date" name="checkin"></td>
        </tr>
        <tr>
            <td>Tanggal Checkout</td>
            <td><input type="date" name="checkout"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>