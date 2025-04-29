<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | {{ $title ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 h-screen grid grid-rows-[auto_1fr_auto]">

    <!-- Sticky Navbar -->
    <nav class="bg-white shadow sticky top-0 z-50">
        @include('layouts.navbar')
    </nav>

    <!-- Main Layout -->
    <div class="flex overflow-hidden">
        <!-- Sidebar (tetap di tempat) -->
        {{-- <aside class="hidden lg:block w-64 bg-white shadow-lg rounded-lg p-6 h-full">
            <h2 class="text-xl font-semibold mb-6 border-b border-gray-200 pb-2">Navigation</h2>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-500 hover:bg-gray-100 p-3 rounded-lg transition">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-500 hover:bg-gray-100 p-3 rounded-lg transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                        </svg>
                        <span>Library</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-500 hover:bg-gray-100 p-3 rounded-lg transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </aside> --}}

        <!-- Main content area yang scrollable -->
        <main class="flex-1 p-8 bg-white shadow-md rounded-lg mx-6 my-6 h-full overflow-y-auto">
            @yield('content')
        </main>
    </div>

    <div class="h-4"></div>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center text-sm py-4 border-t">
        <p class="text-gray-600">&copy; {{ date('Y') }} Perpustakaan. Dibuat dengan <span class="text-red-500">❤️</span> oleh Mirza.</p>
    </footer>

</body>
</html>
