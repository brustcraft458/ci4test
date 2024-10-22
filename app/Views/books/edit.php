<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="/books/update/<?= $book['id'] ?>" method="post">
        <label for="title">Judul:</label>
        <input type="text" name="title" value="<?= esc($book['title']) ?>" required><br>
        <label for="author">Penulis:</label>
        <input type="text" name="author" value="<?= esc($book['author']) ?>" required><br>
        <label for="publisher">Penerbit:</label>
        <input type="text" name="publisher" value="<?= esc($book['publisher']) ?>"><br>
        <label for="year">Tahun:</label>
        <input type="number" name="year" value="<?= esc($book['year']) ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
