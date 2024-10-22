<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';  // Nama tabel
    protected $primaryKey = 'id'; // Primary key

    // Field yang bisa dimasukkan atau diubah
    protected $allowedFields = ['title', 'author', 'publisher', 'year'];

    // Aktifkan otomatis timestamps
    protected $useTimestamps = true;
}
