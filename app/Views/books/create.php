<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Buku</h1>
        <form action="/books/store" method="post" enctype="multipart/form-data"> <!-- Add enctype -->
            <div class="mb-3">
                <label for="title" class="form-label">Judul:</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Penulis:</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Penerbit:</label>
                <input type="text" class="form-control" name="publisher">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Tahun:</label>
                <input type="number" class="form-control" name="year">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar:</label>
                <input type="file" class="form-control" name="image" accept="image/*"> <!-- Image upload -->
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
<?= $this->endSection() ?>
