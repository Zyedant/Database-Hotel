<?php
session_start();

// Koneksi ke database
include 'koneksi.php';

// Periksa koneksi
if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Tangkap data dari formulir login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa data admin
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Memeriksa kata sandi
        if ($password == $admin["password"]) {
            // Autentikasi sukses, simpan informasi admin ke sesi
            $_SESSION['admin_id'] = $admin['id_admin'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_nama'] = $admin['nama'];

            // Redirect ke halaman admin setelah login sukses
            header('Location: home2.php'); // Sesuaikan dengan halaman admin yang sesuai
            exit();
        } else {
            // Password tidak cocok
            $_SESSION['login_error'] = 'Username atau password salah.';
        }
    } else {
        // Admin tidak ditemukan
        $_SESSION['login_error'] = 'Username atau password salah';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Bagian lain dari elemen head ... -->
</head>
<body>
    <!-- Formulir login admin -->
    <section id="admin-login" class="py-5">
        <div class="container">
            <h2 class="text-center">Login Admin</h2>
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['login_error']; ?>
                </div>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
            <form action="login_admin.php" method="POST">
                <div class="form-group">
                    <label for="id_admin">ID:</label>
                    <input type="number" class="form-control" id="id_admin" name="id_admin" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
    <!-- Selesai formulir login admin -->

    <!-- ... Bagian konten lainnya ... -->
</body>
</html>