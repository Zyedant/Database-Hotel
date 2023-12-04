<head>
    <link rel="stylesheet" href="style_data.css">
</head>

<h3>Tambah Data Barang</h3>

<form method="post" action="input_aksi_kamar.php">
    <table>
        <tr>
            <td>No Kamar</td>
            <td><input type="number" name="nokar"> </td>
        </tr>
        <tr>
            <td>Jenis Kamar</td>
            <td><input type="text" name="jenis"></td>
        </tr>
        <tr>
            <td>Fasilitas Kamar</td>
            <td><input type="text" name="fasilitas"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <input type="radio" name="tersedia">
                <label for="tersedia">Tersedia</label>
                <input type="radio" name="tersedia">
                <label for="tersedia">Tidak Tersedia</label>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="text" name="foto"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN">  </td>
            <td><input type="submit" value="Kembali" href="data_kamar"></td>
        </tr>
    </table>
</form>