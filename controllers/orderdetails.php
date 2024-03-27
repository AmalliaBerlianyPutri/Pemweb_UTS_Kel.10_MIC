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

// Mendapatkan ID pesanan dari URL (pastikan aman dan sanitasi)
$order_id = $_GET['order_id'];

// Query untuk mengambil detail pesanan berdasarkan ID pesanan
$query = "SELECT * FROM orderdetails WHERE order_id = '$order_id'";
$result = mysqli_query($koneksi, $query);

// Periksa apakah ada error saat menjalankan query
if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}

// Tampilkan detail pesanan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <!-- Tambahkan stylesheet, script, dan elemen-elemen lain yang diperlukan -->
</head>
<body>
    <h1>Detail Pesanan</h1>
    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop melalui hasil query dan tampilkan detail setiap produk dalam pesanan
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nama_produk'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- Tambahkan konten halaman lainnya -->
</body>
</html>
