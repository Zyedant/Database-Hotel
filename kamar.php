<?php
session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$query = "SELECT * FROM kamar";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="kamar.css">
</head>
<body>

<section id="kamar" class="py-5">
    <div class="container">
        <h2 class="text-center">Pilihan Kamar Kami</h2>
        <p class="text-center">Pilih kamar yang sesuai dengan kebutuhan Anda dan pesan sekarang.</p>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $row['jenis_kamar']; ?></h3>
                    <img src="<?php echo $row['gambar_kamar']; ?>" class="card-img-top" alt="<?php echo $row['jenis_kamar']; ?>">
                    <p class="card-text"><?php echo $row['fasilitas']; ?></p>
                    <span class="font-weight-bold">Harga: $<?php echo number_format($row['harga'], 2); ?>/malam</span> <br>
                    <a href="pesan.php?id=<?php echo $row['id_kamar']; ?>" class="btn btn-primary mt-3">Pesan Sekarang</a>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</section>

</body>
</html>

<?php
mysqli_close($koneksi);
?>