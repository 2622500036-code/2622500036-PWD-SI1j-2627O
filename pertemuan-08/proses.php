<?php
$host = "localhost";
$user = "root";
$pass = "";

// 1. Koneksi otomatis ke MySQL
$koneksi = mysqli_connect($host, $user, $pass);

// 2. Buat database otomatis jika belum ada
mysqli_query($koneksi, "CREATE DATABASE IF NOT EXISTS db_uts_web");

// 3. Pilih database tersebut
mysqli_select_db($koneksi, "db_uts_web");

// 4. Buat tabel otomatis jika belum ada
mysqli_query($koneksi, "CREATE TABLE IF NOT EXISTS pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    hobi VARCHAR(50) NOT NULL
)");

// 5. Proses simpan data saat tombol di web diklik
if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
    $hobi   = $_POST['hobi'];

    $query = "INSERT INTO pendaftaran (nama, email, gender, hobi) VALUES ('$nama', '$email', '$gender', '$hobi')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Pendaftaran berhasil disimpan ke database!'); window.location='pendaftaran.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>