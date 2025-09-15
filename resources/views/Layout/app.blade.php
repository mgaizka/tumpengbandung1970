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
    <header class="bg-black shadow fixed w-full z-50">
        <div class="px-8 lg:px-16 flex items-center justify-between p-4 text-white">

            <!-- Kiri: Logo + Nav (desktop) -->
            <div class="flex items-center gap-10">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-xl font-bold hover:text-blue-500">
                    Tumpeng Bandung 1970
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="hover:text-blue-500">Beranda</a>
                    <a href="{{ url('/menu') }}" class="hover:text-blue-500">Menu</a>
                    <a href="{{ url('/about') }}" class="hover:text-blue-500">Tentang Kami</a>
                    <a href="{{ url('/testimoni') }}" class="hover:text-blue-500">Testimoni</a>
                </nav>
            </div>

            <!-- Kanan: Hamburger Button (mobile only) -->
            <button id="menu-btn" class="md:hidden text-white text-2xl focus:outline-none">
                ☰
            </button>
        </div>
    </header>

    <!-- Mobile Overlay Menu -->
    <div id="mobile-menu" class="hidden fixed inset-0 bg-black bg-opacity-95 text-white z-40">
        <!-- Menu Items -->
        <div class="flex flex-col items-center justify-center h-full space-y-6 text-xl">
            <a href="{{ url('/') }}" class="font-bold hover:text-blue-500">Beranda</a>
            <a href="{{ url('/about') }}" class="font-bold hover:text-blue-500">Tentang Kami</a>
            <a href="{{ url('/menu') }}" class="font-bold hover:text-blue-500">Harga & Paket Menu</a>
            <a href="#" class="font-bold hover:text-blue-500">Cara Order</a>
            <a href="{{ url('/testimoni') }}" class="font-bold hover:text-blue-500">Testimoni</a>
            <a href="#" class="font-bold hover:text-blue-500">Galeri</a>
            <a href="#" class="font-bold hover:text-blue-500">Kontak Kami</a>
        </div>
    </div>



    {{-- Content --}}
    <main class="max-w-7xl mx-auto flex-1 p-6 pt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-black text-white mt-12">
        <div class="px-6 sm:px-8 lg:px-16 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-blue-500">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-blue-500">About</a></li>
                    <li><a href="{{ url('/menu') }}" class="hover:text-blue-500">Service</a></li>
                    <li><a href="#" class="hover:text-blue-500">Gallery</a></li>
                    <li><a href="#" class="hover:text-blue-500">Contact Us</a></li>
                </ul>
            </div>

            <!-- Menu -->
            <div>
                <h3 class="font-bold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">Nasi Tumpeng</a></li>
                    <li><a href="#" class="hover:text-blue-500">Paket Catering</a></li>
                    <li><a href="#" class="hover:text-blue-500">Prasmanan</a></li>
                    <li><a href="#" class="hover:text-blue-500">Snack Box</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h3 class="font-bold mb-4">Support</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">FAQ</a></li>
                    <li><a href="#" class="hover:text-blue-500">Help Center</a></li>
                    <li><a href="#" class="hover:text-blue-500">Tracking</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-bold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li>📍 Bandung, Indonesia</li>
                    <li>📞 +62 812-3456-7890</li>
                    <li>📧 info@tumpengbandung.com</li>
                </ul>
                <div class="flex space-x-4 mt-4">
                    <a href="#"><i class="fab fa-facebook text-xl hover:text-blue-500"></i></a>
                    <a href="#"><i class="fab fa-instagram text-xl hover:text-pink-500"></i></a>
                    <a href="#"><i class="fab fa-twitter text-xl hover:text-blue-400"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-6">
            <div
                class="max-w-7xl mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center text-sm text-gray-400">
                <p>© 2024 Tumpeng Bandung 1970. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</html>
