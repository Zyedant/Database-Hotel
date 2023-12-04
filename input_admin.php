<head>
    <link rel="stylesheet" href="style_data.css">
</head>
<h3>Tambah Data Admin</h3>

<form method="post" action="input_aksi_admin.php">
    <table>
        <tr>
            <td>No Admin</td>
            <td><input type="number" name="noad"> </td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SIMPAN"></td>
            <td><input type="submit" value="Kembali" href="data_admin.php"></td>
        </tr>
    </table>
</form>