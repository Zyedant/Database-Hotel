<?php
session_start(); // Mulai sesi

// Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel_losieto';

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Inisialisasi variabel
$email = $password = '';
$login_error = '';

// Cek apakah formulir login telah dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tangkap data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna dengan email yang sesuai
    $query = "SELECT * FROM pelanggan WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Pengguna dengan email yang sesuai ditemukan
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Periksa kata sandi
        if (password_verify($password, $hashed_password)) {
            // Kata sandi cocok, pengguna berhasil login
            $_SESSION['user_id'] = $row;
            header('Location: home.php'); // Ganti dengan halaman yang sesuai setelah login
            exit();
        } else {
            $login_error = 'Kata sandi salah. Coba lagi.';
        }
    } else {
        $login_error = 'Email tidak ditemukan. Coba lagi atau daftar jika belum memiliki akun.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Bagian lain dari elemen head ... -->
</head>
<body>
    <!-- ... Konten lain dari halaman web ... -->

    <section id="login" class="py-5">
        <div class="container">
            <h2 class="text-center">Masuk</h2>

            <!-- Formulir login -->
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            <!-- Selesai formulir login -->

            <!-- Pesan kesalahan login -->
            <?php if ($login_error): ?>
                <div class="alert alert-danger mt-3">
                    <?php echo $login_error; ?>
                </div>
            <?php endif; ?>
            <!-- Selesai pesan kesalahan login -->

        </div>
    </section>

    <!-- ... Bagian konten lainnya ... -->

</body>
</html>

<?php
// Tutup koneksi ke database
mysqli_close($koneksi);
?>