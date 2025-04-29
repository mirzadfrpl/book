<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <div class="max-w-xl mx-auto p-6 bg-white shadow-lg rounded-xl mt-10">
        <h2 class="text-2xl font-semibold mb-6 text-center">Edit Buku</h2>

        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 text-gray-700">Judul</label>
                <input type="text" name="title" value="{{ old('title', $book->title) }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-700">Penulis</label>
                <input type="text" name="author" value="{{ old('author', $book->author) }}" class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-300" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-700">Penerbit</label>
                <input type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div>
                <label class="block mb-1 text-gray-700">Tahun</label>
                <input type="number" name="year" value="{{ old('year', $book->year) }}" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div>
                <label class="block mb-1 text-gray-700">Stok</label>
                <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" class="w-full border border-gray-300 p-2 rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Thumbnail Baru</label>
                <input type="file" name="thumbnail" class="border rounded w-full p-2">
                @if ($book->thumbnail)
                    <img src="{{ asset('storage/' . $book->thumbnail) }}" class="mt-2 h-20">
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">PDF Baru</label>
                <input type="file" name="pdf" class="border rounded w-full p-2">
                @if ($book->pdf)
                    <a href="{{ asset('storage/' . $book->pdf) }}" target="_blank" class="text-blue-500 underline">Lihat PDF Lama</a>
                @endif
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Simpan Perubahan</button>
            </div>


        </form>
    </div>

</body>
</html>
