{{-- Footer --}}
<footer class="bg-[#161616] text-white">
    <div class="px-4 lg:px-[2cm] py-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 text-[18px]">
        <!-- Kolom 1: Logo (span 2 kolom biar lebar) -->
        <div class="lg:col-span-2 pt-8">
            <div class="flex items-center mb-4">
                <img src="{{ asset('logo.png') }}" alt="Tumpeng Bandung" class="w-16 h-auto mr-3">
                <h3 class="font-bold text-lg">Tumpeng Bandung 1970</h3>
            </div>
            <p class="text-gray-300 mb-4 text-[18px]">
                Kami menghadirkan tumpeng autentik khas <br> Bandung dengan cita rasa terbaik.
                Lengkap <br> dengan pilihan paket untuk setiap acara spesial Anda.
            </p>
            <div class="flex space-x-4 pt-2">
                <a href="https://www.facebook.com/profile.php?id=100063784526500"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black hover:bg-blue-500 hover:text-white transition">
                    <i class="fab fa-facebook-f text-lg"></i>
                </a>
                <a href="https://www.instagram.com/tumpengbandung/"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black hover:bg-pink-500 hover:text-white transition">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="https://www.tiktok.com/@tumpengbandung1970?_t=ZS-90QVCp1lB0a&_r=1"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black hover:bg-gray-800 hover:text-white transition">
                    <i class="fab fa-tiktok text-lg"></i>
                </a>
                <a href="mailto:tumpengbandung1970@gmail.com"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black hover:bg-red-400 hover:text-white transition">
                    <i class="fas fa-envelope text-lg"></i>
                </a>
            </div>

        </div>

        <!-- Kolom 2: Kategori -->
        <div class="pt-8">
            <h3 class="font-bold mb-4">Kategori</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('menu-tumpeng') }}" class="hover:text-blue-500">Tumpeng</a></li>
                <li><a href="{{ route('menu-nasi') }}" class="hover:text-blue-500">Paket Nasi</a></li>
                <li><a href="{{ route('menu-lainnya') }}" class="hover:text-blue-500">Menu Lainnya</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Tentang Kami -->
        <div class="pt-8">
            <h3 class="font-bold mb-4">Tentang Kami</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('tentang-kami') }}" class="hover:text-blue-500">Visi & Misi</a></li>
                <li><a href="{{ route('tentang-kami') }}" class="hover:text-blue-500">Sejarah Singkat</a></li>
                <li><a href="{{ route('tentang-kami') }}" class="hover:text-blue-500">Cara Pemesanan</a></li>
            </ul>
        </div>

        <!-- Kolom 4: Informasi Tambahan -->
        <div class="pt-6">
            <h3 class="font-bold mb-4">Informasi Tambahan</h3>
            <ul class="space-y-3 text-gray-300 text-sm">
                <li class="flex items-center">
                    <i class="fa-solid fa-phone px-2"></i>
                    +62 8112202117
                </li>
                <li class="flex items-center">
                    <i class="fa-solid fa-location-dot px-2"></i>
                    Jl. Mataram No.2, Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114
                </li>
            </ul>
            <div class="mt-4">
                <h4 class="font-bold">Jam Operasional</h4>
                <p class="text-gray-300 text-sm">Senin – Minggu (08.00 – 19.00)</p>
            </div>
        </div>
    </div>

    <!-- Footer bawah -->
    <div
        class="border-t border-gray-700 mt-8 py-4 px-[2cm] flex flex-col sm:flex-row justify-between items-center text-gray-400 text-sm">
        <!-- Copyright -->
        <p class="mb-4 sm:mb-0">
            © 2025 Tumpeng Bandung 1970. — Developed by Fauzan, Gaizka & Monalisa
        </p>

    </div>
</footer>
