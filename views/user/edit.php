<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>
</head>
<body>
    <h1>Edit Pengguna</h1>
    <!-- Form untuk mengedit pengguna -->
    <form action="proses_edit_user.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
