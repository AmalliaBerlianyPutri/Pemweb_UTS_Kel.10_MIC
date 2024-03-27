<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h1>Edit Order</h1>
    <!-- Form untuk mengedit order -->
    <form action="proses_edit_order.php" method="POST">
        <label for="nomor_order">Nomor Order:</label><br>
        <input type="text" id="nomor_order" name="nomor_order"><br>
        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
