<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Buku</h1>
        <form action="/books/update/<?= $book['id'] ?>" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Judul:</label>
                <input type="text" class="form-control" name="title" value="<?= esc($book['title']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Penulis:</label>
                <input type="text" class="form-control" name="author" value="<?= esc($book['author']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Penerbit:</label>
                <input type="text" class="form-control" name="publisher" value="<?= esc($book['publisher']) ?>">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Tahun:</label>
                <input type="number" class="form-control" name="year" value="<?= esc($book['year']) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
