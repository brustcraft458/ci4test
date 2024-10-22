<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="/books/store" method="post">
        <label for="title">Judul:</label>
        <input type="text" name="title" required><br>
        <label for="author">Penulis:</label>
        <input type="text" name="author" required><br>
        <label for="publisher">Penerbit:</label>
        <input type="text" name="publisher"><br>
        <label for="year">Tahun:</label>
        <input type="number" name="year"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
