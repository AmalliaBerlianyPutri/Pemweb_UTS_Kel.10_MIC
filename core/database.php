<?php

class Database {
    private $host = 'localhost: 8111';
    private $username = 'root';
    private $password = '';
    private $database = 'db_online shop';
    private $koneksi;

    // Konstruktor untuk inisialisasi koneksi database
    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        // Periksa koneksi
        if (mysqli_connect_errno()) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }
    }

    // Fungsi untuk menjalankan query SELECT
    public function query($sql) {
        $result = mysqli_query($this->koneksi, $sql);

        // Periksa apakah ada error saat menjalankan query
        if (!$result) {
            die("Error: " . mysqli_error($this->koneksi));
        }

        return $result;
    }

    // Fungsi untuk melakukan query INSERT, UPDATE, DELETE
    public function execute($sql) {
        $result = mysqli_query($this->koneksi, $sql);

        // Periksa apakah query berhasil dijalankan
        if (!$result) {
            die("Error: " . mysqli_error($this->koneksi));
        }

        return $result;
    }

    // Fungsi untuk mendapatkan satu baris hasil dari query SELECT
    public function fetchRow($result) {
        return mysqli_fetch_assoc($result);
    }

    // Fungsi untuk mendapatkan semua baris hasil dari query SELECT
    public function fetchAll($result) {
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // Fungsi untuk mendapatkan ID terakhir yang di-generate oleh AUTO_INCREMENT
    public function getLastInsertId() {
        return mysqli_insert_id($this->koneksi);
    }

    // Fungsi untuk melarang query SQL
    public function escapeString($string) {
        return mysqli_real_escape_string($this->koneksi, $string);
    }

    // Destructor untuk menutup koneksi database saat objek dihancurkan
    public function __destruct() {
        mysqli_close($this->koneksi);
    }
}

?>
