<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Pelanggan</h2>
        </div>
        <div class="ovflow">
        <table>
            <tr>
                <th>id_pelanggan</th>
                <th>nama</th>
                <th>email</th>
                <th>password</th>
                <th>telepon</th>
                <th>Hapus Data</th>
                <th>Tambah Data</th>
            </tr>
            <?php
            include "koneksi.php";
            $data=mysqli_query($koneksi, "select * from pelanggan");
            while($d=mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $d['id_pelanggan'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                    <td><?php echo $d['password'] ?></td>
                    <td><?php echo $d['telepon'] ?></td>
                    <td id="tombol col">
                        <a href="hapus_pelanggan.php?id=<?php echo $d['id_pelanggan'] ?>">Hapus</a>
                    </td>
                    <td id="tombol col">
                        <a href="edit_pelanggan.php?id=<?php echo $d['id_pelanggan'] ?>">Edit</a>
                    </td>
                </tr> <br>
            <?php
            }
            ?>
        </table>
        </div>
        <div class="tombol">
        <a href="input_pelanggan.php">Tambahkan Data Baru</a>
        <a href="home2.php">Kembali Ke Home</a>
        <div></div>
    </div>
</body>
</html>