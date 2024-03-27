<?php

// Kode untuk menangani permintaan masuk ke halaman home

// Mulai sesi (jika belum dimulai)
session_start();

// Memeriksa apakah pengguna sudah masuk atau belum
if (!isset($_SESSION['user'])) {
    // Jika pengguna belum masuk, alihkan ke halaman login
    header("Location: login.php");
    exit();
}

// Jika pengguna sudah masuk, kita bisa melanjutkan dengan menampilkan halaman home

// Contoh aksi lain yang dapat dilakukan, misalnya pengambilan data dari database, dll.
// ...

// Tampilkan halaman home
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tambahkan stylesheet, script, dan elemen-elemen lain yang diperlukan -->
</head>
<body>
    <h1>Selamat datang di halaman home!</h1>
    <p>Halo, <?= $_SESSION['user'] ?>. Ini adalah halaman home Anda.</p>
    <!-- Tambahkan konten halaman lainnya -->
</body>
</html>