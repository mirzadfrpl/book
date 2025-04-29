@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 text-gray-800 p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Selamat Datang, {{ Auth::user()->name }} di Perpustakaan Digital</h2>
        <p class="text-base">Temukan dan kelola koleksi buku Anda dengan mudah dan cepat.</p>
    </div>

    <div class="mt-6"></div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="px-4 py-2 bg-gray-800 text-white font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
            Logout
        </button>
    </form>

    <div class="mt-8">
        <h3 class="text-xl font-semibold mb-4">Daftar Buku Tersedia</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($books as $book)
            <div class="bg-white border border-gray-200 rounded-md shadow-sm p-4">
                <img
    src="{{ asset('storage/' . $book->thumbnail) }}"
    alt="Thumbnail {{ $book->title }}"
    class="w-full h-48 object-contain rounded mb-3 bg-gray-100"
/>
                <h4 class="text-lg font-medium mb-2">{{ $book->title }}</h4>
                <p class="text-sm text-gray-600"><strong>Penulis:</strong> {{ $book->author }}</p>
                <p class="text-sm text-gray-600"><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
                <a href="{{ asset('storage/' . $book->pdf) }}" target="_blank">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">
                        Buka PDF
                    </button>
                </a>
            </div>
        @endforeach


        </div>
    </div>
@endsection
