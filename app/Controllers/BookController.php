<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class BookController extends Controller
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();  // Inisialisasi BookModel
    }

    // Menampilkan semua buku
    public function index()
    {
        $data['books'] = $this->bookModel->findAll();
        return view('books/index', $data);
    }

    // Form tambah buku
    public function create()
    {
        return view('books/create');
    }

    // Proses simpan buku
    public function store()
    {
        $this->bookModel->save([
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ]);
        return redirect()->to('/books');
    }

    // Form edit buku
    public function edit($id)
    {
        $data['book'] = $this->bookModel->find($id);
        return view('books/edit', $data);
    }

    // Proses update buku
    public function update($id)
    {
        $this->bookModel->update($id, [
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ]);
        return redirect()->to('/books');
    }

    // Proses hapus buku
    public function delete($id)
    {
        $this->bookModel->delete($id);
        return redirect()->to('/books');
    }
}
