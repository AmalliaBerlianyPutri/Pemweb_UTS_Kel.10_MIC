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

// Mulai sesi (jika belum dimulai)
session_start();

// Fungsi untuk memeriksa apakah pengguna sudah masuk atau belum
function cekLogin() {
    if (!isset($_SESSION['user'])) {
        // Jika pengguna belum masuk, alihkan ke halaman login
        header("Location: login.php");
        exit();
    }
}

// Fungsi untuk logout
function logout() {
    // Hapus semua data sesi
    $_SESSION = array();

    // Hapus cookie sesi jika ada
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Hancurkan sesi
    session_destroy();

    // Redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Fungsi untuk mengambil data pengguna berdasarkan username
function getUserByUsername($username) {
    global $koneksi;
    
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}

// Fungsi untuk menambahkan user baru
function tambahUser($username, $password) {
    global $koneksi;

    // Hash password sebelum disimpan ke database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    $result = mysqli_query($koneksi, $query);

    return $result;
}

// Fungsi untuk memeriksa apakah username sudah digunakan
function cekUsername($username) {
    global $koneksi;

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return true; // Username sudah digunakan
    } else {
        return false; // Username belum digunakan
    }
}

?>
