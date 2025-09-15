<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    {{-- Navbar --}}
    <!-- Header -->
    <header class="bg-black shadow">
        <div class="px-8 lg:px-16 flex items-center justify-start gap-10 p-4 text-white">
            <a href="{{ url('/') }}" class="text-xl font-bold hover:text-blue-500">
                Tumpeng Bandung 1970
            </a>
            <nav class="space-x-6">
                <a href="{{ url('/') }}" class="hover:text-blue-500">Beranda</a>
                <a href="{{ url('/menu') }}" class="hover:text-blue-500">Menu</a>
                <a href="{{ url('/about') }}" class="hover:text-blue-500">Tentang Kami</a>
                <a href="{{ url('/testimoni') }}" class="hover:text-blue-500">Testimoni</a>
            </nav>
        </div>
    </header>


    {{-- Content --}}
    <main class="max-w-7xl mx-auto flex-1 p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-black text-white mt-10">
        <div class="px-8 lg:px-16 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

            <div>
                <h3 class="font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="hover:text-blue-500">About</a></li>
                    <li><a href="#" class="hover:text-blue-500">Service</a></li>
                    <li><a href="#" class="hover:text-blue-500">Gallery</a></li>
                    <li><a href="#" class="hover:text-blue-500">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">Nasi Tumpeng</a></li>
                    <li><a href="#" class="hover:text-blue-500">Paket Catering</a></li>
                    <li><a href="#" class="hover:text-blue-500">Prasmanan</a></li>
                    <li><a href="#" class="hover:text-blue-500">Snack Box</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Support</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">FAQ</a></li>
                    <li><a href="#" class="hover:text-blue-500">Help Center</a></li>
                    <li><a href="#" class="hover:text-blue-500">Tracking</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li>📍 Bandung, Indonesia</li>
                    <li>📞 +62 812-3456-7890</li>
                    <li>📧 info@tumpengbandung.com</li>
                </ul>
            </div>
        </div>

        <div
            class="border-t border-gray-700 px-8 lg:px-16 py-4 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
            <p>© 2024 Tumpeng Bandung 1970. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-500">Terms</a>
                <a href="#" class="hover:text-blue-500">Privacy</a>
            </div>
        </div>
    </footer>
</body>

</html>
