<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Keranjang</title>
</head>
<body>
    <h1>Edit Keranjang</h1>
    <!-- Form untuk mengedit keranjang -->
    <form action="proses_edit_keranjang.php" method="POST">
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk"><br>
        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
