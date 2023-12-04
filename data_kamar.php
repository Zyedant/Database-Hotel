<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kamar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Kamar</h2>
        </div>
        <div class="ovflow">
        <table>
            <tr>
                <th>ID Kamar</th>
                <th>Jenis Kamar</th>
                <th>Fasilitas</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Gambar Kamar</th>
                <th>Hapus Data</th>
                <th>Tambah Data</th>
            </tr>
            <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, "select * from kamar");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $d['id_kamar'] ?></td>
                    <td><?php echo $d['jenis_kamar'] ?></td>
                    <td><?php echo $d['fasilitas'] ?></td>
                    <td><?php echo $d['harga'] ?></td>
                    <td><?php echo $d['tersedia'] ?></td>
                    <td id="ovflw"><?php echo $d['gambar_kamar'] ?></td>
                    <td id="tombol col">
                        <a href="hapus_kamar.php?id=<?php echo $d['id_kamar'] ?>">Hapus</a>
                    </td>
                    <td id="tombol col">
                        <a href="edit_kamar.php?id=<?php echo $d['id_kamar'] ?>">Edit</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        </div>
        <div class="tombol">
        <a href="input_kamar.php">Tambahkan Data Baru</a>
        <a href="home2.php">Kembali Ke Home</a>
        </div>
    </div>
</body>
</html>