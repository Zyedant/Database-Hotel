    <?php
    session_start();
    
    // Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'hotel';

    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Periksa koneksi
    if (mysqli_connect_error()) {
        die('Koneksi database gagal: ' . mysqli_connect_error());
    }

    // Tangkap ID kamar dari parameter URL
    if (isset($_GET['id'])) {
        $id_kamar = $_GET['id'];

        // Query untuk mengambil data kamar berdasarkan ID
        $query = "SELECT * FROM kamar WHERE id_kamar = $id_kamar";
        $result = mysqli_query($koneksi, $query);

        // Periksa apakah kamar ditemukan
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $jenis_kamar = $row['jenis_kamar'];
            $harga = $row['harga'];
            // Di sini Anda dapat melanjutkan proses pemesanan sesuai kebutuhan Anda
        } else {
            // Kamar tidak ditemukan, tindakan yang sesuai dapat diambil
        }
    } else {
        // Parameter ID kamar tidak ditemukan, tindakan yang sesuai dapat diambil
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- ... Bagian lain dari elemen head ... -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="pesan.css">
    </head>
    <body>
        <!-- ... Konten lain dari halaman web ... -->

        <section id="pesan" class="py-5">
            <div class="container">
                <h2 class="text-center">Pemesanan Kamar</h2>
                <p class="text-center">Silakan lengkapi formulir pemesanan di bawah ini.</p>

                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Pesan Kamar: <?php echo $jenis_kamar; ?></h3>
                        <p class="card-text">Harga per malam: $<?php echo number_format($harga, 2); ?></p>

                        <!-- Formulir pemesanan (tambahkan formulir sesuai kebutuhan Anda) -->
                        <form action="pesan_aksi.php" method="POST">
                            <input type="text" style="display:none" value="<?= $_GET["id"] ?>" name="id_kamar">
                            <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="number" class="form-control" id="id" name="id" disabled required value="<?php echo $_SESSION['user_id']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Anda:</label>
                                <input type="text" class="form-control" id="nama" name="nama" disabled required>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email:</label>
                                <input type="email" class="form-control" id="email" name="email" disabled required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_checkin">Tanggal Check-In:</label>
                                <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_checkout">Tanggal Check-Out:</label>
                                <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                        </form>
                        <!-- Selesai formulir pemesanan -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ... Bagian konten lainnya ... -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
    </html>

    <?php
    // Tutup koneksi ke database
    mysqli_close($koneksi);
    ?>