<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Detail Pesanan</title>
</head>
<body>
    <h1>Edit Detail Pesanan</h1>
    <!-- Form untuk mengedit detail pesanan -->
    <form action="proses_edit_orderdetails.php" method="POST">
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk"><br>
        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
