<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$id = $nama = $email = $telepon = $user_password = ''; 
$registration_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $user_password = $_POST['password']; 
    $telepon = $_POST['telepon'];

    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    $query = "INSERT INTO pelanggan (nama, email, password) VALUES ('$nama', '$email', '$hashed_password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        
        header('Location: login.php'); 
        exit();
    } else {
        $registration_error = 'Gagal mendaftar. Coba lagi.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <section id="register" class="py-5">
        <div class="container">
            <h2 class="text-center">Registrasi</h2>

            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" class="form-control" id="id" name="ida" value="<?php echo $id; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Phone Number:</label>
                    <input type="telephone" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
            <?php if ($registration_error): ?>
                <div class="alert alert-danger mt-3">
                    <?php echo $registration_error; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>


</body>
</html>

<?php
mysqli_close($koneksi);
?>