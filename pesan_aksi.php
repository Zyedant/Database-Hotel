<?php
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

// Tangkap data dari formulir pemesanan
$id = $_SESSION['user_id'];
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];

// Anda perlu mengambil ID kamar dari parameter URL atau sesuai dengan cara Anda mengidentifikasi kamar yang dipesan
 $id_kamar = $_POST["id_kamar"]; // Gantilah ini dengan cara Anda mengambil ID kamar

// Selanjutnya, Anda dapat melakukan penambahan data pemesanan ke dalam tabel pemesanan
// Query untuk memasukkan data pemesanan ke dalam database
 $query = "INSERT INTO pemesanan (id_pelanggan, id_kamar, tanggal_checkin, tanggal_checkout) VALUES ('$id', '$id_kamar', '$tanggal_checkin', '$tanggal_checkout')";

 //Jalankan query pemesanan (aktifkan ini setelah Anda memiliki ID kamar yang sesuai)
 $result = mysqli_query($koneksi, $query);

 //Periksa apakah pemesanan berhasil
 if ($result) {
     // Pemesanan berhasil, Anda dapat mengarahkan pengguna ke halaman konfirmasi atau halaman lain yang sesuai
     header('Location: konfirmasi.php'); // Ganti 'konfirmasi.php' sesuai dengan halaman yang sesuai
     exit();
 } else {
     // Gagal melakukan pemesanan, tindakan yang sesuai dapat diambil
     echo 'Pemesanan gagal. Coba lagi.';
 }

// Tutup koneksi ke database
mysqli_close($koneksi);
?>