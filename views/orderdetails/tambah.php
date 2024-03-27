<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Detail Pesanan</title>
</head>
<body>
    <h1>Tambah Detail Pesanan</h1>
    <!-- Form untuk menambahkan detail pesanan -->
    <form action="proses_tambah_orderdetails.php" method="POST">
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk"><br>
        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>
        <button type="submit">Tambah Detail Pesanan</button>
    </form>
</body>
</html>
