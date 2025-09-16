<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-hero">
    <!-- Navbar -->
    <nav
        class="relative bg-[#161616] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <!-- Mobile menu button -->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button id="menu-button" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon hamburger -->
                        <svg id="icon-open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon close -->
                        <svg id="icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Logo -->
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="logo.png" alt="Tumpeng Bandung" class="w-[86px] h-[61px]" />
                    </div>
                    <!-- Desktop menu -->
                    <div class="hidden sm:ml-6 sm:block pt-3">
                        <div class="flex space-x-4">
                            <a href="#"
                                class="rounded-md bg-gray-950/50 px-3 py-2 text-md font-medium text-white">Beranda</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-md font-medium text-gray-300 hover:bg-white/5 hover:text-white">Menu</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-md font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tentang
                                Kami</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-md font-medium text-gray-300 hover:bg-white/5 hover:text-white">Testimoni</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, toggle with JS -->
        <div id="mobile-menu" class="hidden sm:hidden px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Beranda</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Menu</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tentang</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Testimoni</a>
        </div>
    </nav>

    {{-- <!-- Mobile Overlay Menu -->
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
    </div> --}}



    <main class="max-w">
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

<style>
    .bg-hero {
        background-image: url('bg 1.png');
        /* path relatif dari public */
        background-size: cover;
        background-position: center;
    }
</style>

<script>
    const menuButton = document.getElementById("menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const iconOpen = document.getElementById("icon-open");
    const iconClose = document.getElementById("icon-close");

    menuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        iconOpen.classList.toggle("hidden");
        iconClose.classList.toggle("hidden");
    });
</script>
</html>
