<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="flex flex-col min-h-screen bg-hero">
    <!-- Navbar -->
    <nav
        class="relative bg-[#161616] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
        <div class="px-[2cm]"> <!-- jarak kiri kanan 2cm -->
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
        <div id="mobile-menu" class="hidden sm:hidden px-[2cm] pt-2 pb-3 space-y-1">
            <a href="#"
                class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Beranda</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Menu</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Tentang</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Testimoni</a>
        </div>
    </nav>

    <main class="max-w">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-[#161616] text-white">
        <div class="px-[2cm] py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
    
            <!-- Kolom 1: Logo (span 2 kolom biar lebar) -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-4">
                    <img src="logo.png" alt="Tumpeng Bandung" class="w-16 h-auto mr-3">
                    <h3 class="font-bold text-lg">Tumpeng Bandung 1970</h3>
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Kami menghadirkan tumpeng autentik khas Bandung dengan cita rasa terbaik.
                    Lengkap dengan pilihan paket untuk setiap acara spesial Anda.
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#"><i class="fab fa-facebook text-xl hover:text-blue-500"></i></a>
                    <a href="#"><i class="fab fa-instagram text-xl hover:text-pink-500"></i></a>
                    <a href="#"><i class="fab fa-tiktok text-xl hover:text-gray-200"></i></a>
                    <a href="#"><i class="fas fa-envelope text-xl hover:text-blue-400"></i></a>
                </div>
            </div>
    
            <!-- Kolom 2: Kategori -->
            <div>
                <h3 class="font-bold mb-4">Kategori</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">Tumpeng</a></li>
                    <li><a href="#" class="hover:text-blue-500">Nasi</a></li>
                    <li><a href="#" class="hover:text-blue-500">Menu Lainnya</a></li>
                </ul>
            </div>
    
            <!-- Kolom 3: Tentang Kami -->
            <div>
                <h3 class="font-bold mb-4">Tentang Kami</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-500">Visi & Misi</a></li>
                    <li><a href="#" class="hover:text-blue-500">Sejarah Singkat</a></li>
                    <li><a href="#" class="hover:text-blue-500">Cara Pemesanan</a></li>
                </ul>
            </div>
    
            <!-- Kolom 4: Informasi Tambahan -->
            <div>
                <h3 class="font-bold mb-4">Informasi Tambahan</h3>
                <ul class="space-y-3 text-gray-300 text-sm">
                    <li>📞 +62 112202117</li>
                    <li>📍 Jl. Mataram No.2, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114</li>
                </ul>
                <div class="mt-4">
                    <h4 class="font-bold">Jam Operasional</h4>
                    <p class="text-gray-300 text-sm">Senin – Minggu (08.00 – 19.00)</p>
                </div>
            </div>
        </div>
    
        <!-- Footer bawah -->
        <div class="border-t border-gray-700 mt-8 py-4 px-15 text-start text-gray-400 text-sm">
            © 2025 Tumpeng Bandung 1970. All rights reserved.
        </div>
    </footer>
</body>

<style>
    .bg-hero {
        background-image: url('bg 1.png');
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
     AOS.init();
</script>
</html>
