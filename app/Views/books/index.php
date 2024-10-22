<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="/books/create">Tambah Buku</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= esc($book['title']) ?></td>
            <td><?= esc($book['author']) ?></td>
            <td><?= esc($book['publisher']) ?></td>
            <td><?= esc($book['year']) ?></td>
            <td>
                <a href="/books/edit/<?= $book['id'] ?>">Edit</a>
                <a href="/books/delete/<?= $book['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
