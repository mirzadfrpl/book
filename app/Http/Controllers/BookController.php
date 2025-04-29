<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', [
            'title' => 'Daftar Buku',
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create', [
            'title' => 'Tambah Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'year' => 'nullable|digits:4|integer',
            'stock' => 'nullable|integer|min:0',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB maksimal ukuran file gambar
            'pdf' => 'nullable|mimes:pdf|max:5000000',
        ]);

        $thumbnailPath = $request->hasFile('thumbnail')
        ? $request->file('thumbnail')->store('thumbnails', 'public')
        : null;

    $pdfPath = $request->hasFile('pdf')
        ? $request->file('pdf')->store('pdfs', 'public')
        : null;



        // Simpan ke database
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'stock' => $request->stock ?? 0,
            'thumbnail' => $thumbnailPath,
            'pdf' => $pdfPath,
        ]);



        // Debugging paths
        dd($thumbnailPath, $pdfPath);


        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', [
            'title' => 'Edit Buku',
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'year' => 'nullable|digits:4|integer',
            'stock' => 'nullable|integer|min:0',
          'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB maksimal ukuran file gambar
            'pdf' => 'nullable|mimes:pdf|max:5000000',
        ]);

        $data = $request->only(['title', 'author', 'publisher', 'year', 'stock']);

        // Handle thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($book->thumbnail) {
                Storage::disk('public')->delete($book->thumbnail); // Hapus thumbnail lama
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        // Handle PDF
        if ($request->hasFile('pdf')) {
            if ($book->pdf) {
                Storage::disk('public')->delete($book->pdf); // Hapus pdf lama
            }
            $data['pdf'] = $request->file('pdf')->store('pdfs', 'public');
        }

        $book->update($data);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
        if ($book->thumbnail) {
            Storage::disk('public')->delete($book->thumbnail);
        }
        if ($book->pdf) {
            Storage::disk('public')->delete($book->pdf);
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
