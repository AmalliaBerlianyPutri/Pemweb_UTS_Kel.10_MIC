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

// Mendapatkan data dari form pemesanan (pastikan data diproses dengan aman dan sanitasi)
$nama = $_POST['nama'];
$email = $_POST['email'];
// Jika ada data lain yang diperlukan dari form, tambahkan di sini

// Simpan data pemesanan ke dalam tabel "order" di database
$query = "INSERT INTO `order` (`nama`, `email`) VALUES ('$nama', '$email')";
$result = mysqli_query($koneksi, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Pesanan berhasil disimpan, tampilkan pesan sukses
    echo "Pesanan Anda berhasil disimpan. Terima kasih!";
} else {
    // Pesanan gagal disimpan, tampilkan pesan error
    echo "Gagal menyimpan pesanan. Silakan coba lagi.";
}

// Tutup koneksi
mysqli_close($koneksi);

?>
