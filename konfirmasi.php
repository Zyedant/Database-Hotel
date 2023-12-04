<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];

    $query = "SELECT * FROM pemesanan WHERE id_pemesanan = $id_pemesanan";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nomor_pemesanan = $row['id_pemesanan'];
        $id_pelanggan = $row['id_pelanggan'];
        $tanggal_checkin = $row['tanggal_checkin'];
        $tanggal_checkout = $row['tanggal_checkout'];

        $query_pelanggan = "SELECT nama FROM pelanggan WHERE id_pelanggan = $id_pelanggan";
        $result_pelanggan = mysqli_query($koneksi, $query_pelanggan);

        if (mysqli_num_rows($result_pelanggan) > 0) {
            $row_pelanggan = mysqli_fetch_assoc($result_pelanggan);
            $nama_pelanggan = $row_pelanggan['nama'];
        }
    } else {
        echo "Pemesanan tidak ditemukan.";
        exit();
    }
} else {
    echo "Parameter ID pemesanan tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
</head>
<body>
    <h1>Konfirmasi Pemesanan</h1>

    <p>Terima kasih, pemesanan Anda telah berhasil.</p>

    <p>Detail Pemesanan:</p>
    <ul>
        <li>Nomor Pemesanan: <?php echo $nomor_pemesanan; ?></li>
        <li>Nama: <?php echo $nama_pelanggan; ?></li>
        <li>Tanggal Check-In: <?php echo $tanggal_checkin; ?></li>
        <li>Tanggal Check-Out: <?php echo $tanggal_checkout; ?></li>
    </ul>

    <a href="home.php">Kembali ke Beranda</a>

</body>
</html>