<?php

// Koneksi ke database (ganti nilainya dengan informasi koneksi yang sesuai)
$host = 'localhost: 8111';
$username = 'root';
$password = '';
$database = 'db_database';

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil isi keranjang dari database
$query = "SELECT * FROM keranjang";
$result = mysqli_query($koneksi, $query);

// Periksa apakah ada error saat menjalankan query
if (!$result) {
    die("Error: " . mysqli_error($koneksi));
}

// Tampilkan isi keranjang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- Tambahkan stylesheet, script, dan elemen-elemen lain yang diperlukan -->
</head>
<body>
    <h1>Keranjang Belanja</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_belanja = 0; // Inisialisasi total belanja

            // Loop melalui hasil query dan tampilkan setiap item di keranjang
            while ($row = mysqli_fetch_assoc($result)) {
                $total = $row['harga'] * $row['jumlah'];
                $total_belanja += $total; // Menambahkan total belanja

                echo "<tr>";
                echo "<td>" . $row['nama_barang'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                echo "<td>" . $total . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total Belanja: <?php echo $total_belanja; ?></p>
    <!-- Tambahkan konten halaman lainnya -->
</body>
</html>
