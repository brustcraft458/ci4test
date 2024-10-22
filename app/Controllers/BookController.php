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
        // Validate the uploaded file
        $image = $this->request->getFile('image');

        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Move the file to the uploads directory
            $imageName = $image->getRandomName(); // or specify a name
            $image->move('uploads', $imageName);

            // Save book data
            $this->bookModel->save([
                'title'     => $this->request->getPost('title'),
                'author'    => $this->request->getPost('author'),
                'publisher' => $this->request->getPost('publisher'),
                'year'      => $this->request->getPost('year'),
                'image'     => 'uploads/' . $imageName, // Store the image path
            ]);
        }

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
        // Validate the uploaded file
        $image = $this->request->getFile('image');
        
        $data = [
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ];
    
        // Check if a new image is being uploaded
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Move the new image to the uploads directory
            $imageName = $image->getRandomName(); // or specify a name
            $image->move('uploads', $imageName);
            
            // Update the data to include the new image path
            $data['image'] = 'uploads/' . $imageName;
        }
    
        // Update the book record
        $this->bookModel->update($id, $data);
    
        return redirect()->to('/books');
    }

    // Proses hapus buku
    public function delete($id)
    {
        $this->bookModel->delete($id);
        return redirect()->to('/books');
    }
}
