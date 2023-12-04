<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Pemesanan</h2>
        </div>
        <div class="ovflow">
        <table>
            <tr>
                <th>id_pemesanan</th>
                <th>id_pelanggan</th>
                <th>id_kamar</th>
                <th>tanggal_checkin</th>
                <th>tanggal_checkout</th>
                <th>Hapus Data</th>
                <th>Tambah Data</th>
            </tr>
            <?php
            include "koneksi.php";
            $data=mysqli_query($koneksi, "select * from pemesanan");
            while($d=mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $d['id_pemesanan'] ?></td>
                    <td><?php echo $d['id_pelanggan'] ?></td>
                    <td><?php echo $d['id_kamar'] ?></td>
                    <td><?php echo $d['tanggal_checkin'] ?></td>
                    <td><?php echo $d['tanggal_checkout'] ?></td>
                    <td id="tombol col">
                        <a href="hapus_pemesanan.php?id=<?php echo $d['id_pemesanan'] ?>">Hapus</a>
                    </td>
                    <td id="tombol col">
                        <a href="edit_pemesanan.php?id=<?php echo $d['id_pemesanan'] ?>">Edit</a> 
                    </td>
                </tr> <br>
            <?php
            }
            ?>
        </table>
        </div>
        <div class ="tombol">
        <a href="input_pemesanan.php">Tambahkan Data Baru</a>
        <a href="home2.php">Kembali Ke Home</a>
        </div>
    </div>
</body>
</html>