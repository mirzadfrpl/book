<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
        <div class="bg-white shadow-2xl rounded-2xl p-10 text-center transform transition hover:scale-105">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-6 tracking-tight">
                Welcome to the Dashboard
            </h1>
            <p class="text-lg text-gray-700 mb-8">
                Manage your books and inventory with ease.
            </p>
            <a href="{{ route('books.index') }}" class="inline-block bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transform transition hover:scale-110">
                Go to Books
            </a>
        </div>
    </div>

</body>
</html>
