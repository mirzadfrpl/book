@extends('layouts.app')

@section('content')
<div class="text-center py-20">
    <h1 class="text-6xl font-bold text-red-600">403</h1>
    <p class="text-2xl mt-4">Kamu tidak punya akses ke halaman ini.</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kembali ke Home</a>
</div>
@endsection
