<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Daftar Admin</h2>
        </div>
        <div class="oflow">
        <table>
            <tr>
                <th>id_admin</th>
                <th>username</th>
                <th>password</th>
                <th>Hapus Data</th>
                <th>Tambah Data</th>
            </tr>
            <?php
            include "koneksi.php";
            $data=mysqli_query($koneksi, "select * from admin");
            while($d=mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $d['id_admin'] ?></td>
                    <td><?php echo $d['username'] ?></td>
                    <td><?php echo $d['password'] ?></td>
                    <td id="tombol col">
                        <a href="hapus_admin.php?id=<?php echo $d['id_admin'] ?>">Hapus</a>
                    </td>
                    <td id="tombol col">
                        <a href="edit_admin.php?id=<?php echo $d['id_admin'] ?>">Edit</a>
                    </td>
                </tr> 
            <?php
            }
            ?>
        </table>    
        </div>
        <div class="tombol">
        <a href="input_admin.php">Tambahkan Data Baru</a>
        <a href="home2.php">Kembali Ke Home</a>
        </div>
    </div>
</body>
</html>