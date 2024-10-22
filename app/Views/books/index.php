<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Buku</h1>
        <a href="/books/create" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Gambar</th> <!-- Add column for images -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= esc($book['title']) ?></td>
                    <td><?= esc($book['author']) ?></td>
                    <td><?= esc($book['publisher']) ?></td>
                    <td><?= esc($book['year']) ?></td>
                    <td>
                        <?php if (!empty($book['image'])): ?>
                            <img src="<?= base_url($book['image']) ?>" alt="Book Image" class="img-thumbnail" style="max-width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="/books/edit/<?= $book['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus buku ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>
