@extends('layouts.app')
@section('content')
<div class="container mx-auto my-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">{{ $title }}</h1>
        <a href="{{ route('books.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Buku</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <button type="button" class="text-green-500 hover:text-green-800" data-dismiss="alert" aria-label="Close">&times;</button>
            </span>
        </div>
    @endif

    @if($books->count())
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Judul</th>
                        <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Penulis</th>
                        <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Penerbit</th>
                        <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Tahun</th>
                        <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">Stok</th>
                        <th class="px-6 py-3 text-center text-sm font-medium uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->author }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->publisher }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->year }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $book->stock }}</td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('books.edit', $book->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 mr-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline-block"
                                      onsubmit="return confirm('Yakin ingin hapus buku ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative text-center">
            <i class="bi bi-info-circle"></i> Tidak ada buku.
        </div>
    @endif
</div>
@endsection
