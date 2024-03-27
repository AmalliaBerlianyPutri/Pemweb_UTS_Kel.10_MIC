<?php

// Koneksi ke database (ganti nilainya dengan informasi koneksi yang sesuai)
$host = 'localhost: 8111';
$username = 'root';
$password = '';
$database = 'db_online shop';

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil daftar pengguna dari database
$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);

// Periksa apakah ada error saat menjalankan query
if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}

// Tampilkan daftar pengguna
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <!-- Tambahkan stylesheet, script, dan elemen-elemen lain yang diperlukan -->
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <ul>
        <?php
        // Loop melalui hasil query dan tampilkan setiap pengguna
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['username'] . " - " . $row['email'] . "</li>";
        }
        ?>
    </ul>
    <!-- Tambahkan konten halaman lainnya -->
</body>
</html>
