<?php
session_start();

// Pastikan pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit();
}

// Anda dapat mengambil data pelanggan dari database menggunakan $_SESSION['user_id']
// Selanjutnya, Anda bisa menampilkan informasi pelanggan atau riwayat pesanan di sini.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Bagian lain dari elemen head ... -->
</head>
<body>
    <!-- ... Konten lain dari halaman web ... -->

    <section id="dashboard" class="py-5">
        <div class="container">
            <h2 class="text-center">Dashboard</h2>

            <!-- Tampilkan informasi pelanggan atau riwayat pesanan di sini -->

        </div>
    </section>

    <!-- ... Bagian konten lainnya ... -->

</body>
</html>