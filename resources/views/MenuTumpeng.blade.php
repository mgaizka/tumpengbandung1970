@extends('Layout.app')

@section('title', 'Menu Tumpeng')

@section('content')

    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-[18px] font-bold mb-4 text-center">
            PAKET TUMPENG
        </span>

        <!-- Judul -->
        <h2 class="text-[18px] sm:text-3xl md:text-4xl font-bold mb-4 text-center">
            Rayakan Momen Istimewa Dengan <br>
            <span class="text-white-300">Tumpeng Bandung 1970</span>
        </h2>

        <!-- Tab / Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-4 pt-8 mb-10">
            <a href="{{ route('menu-tumpeng', ['kategori' => 'nasi-box']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Box' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'nasi-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Nasi Tumpeng Box
            </a>

            <a href="{{ route('menu-tumpeng', ['kategori' => 'mini']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Mini' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'mini' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Tumpeng Mini
            </a>

            <a href="{{ route('menu-tumpeng', ['kategori' => 'tampah']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Tampah' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'tampah' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Tumpeng Tampah
            </a>

            <a href="{{ route('menu-tumpeng', ['kategori' => 'premium']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Premium' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'premium' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Tumpeng Premium
            </a>
        </div>

        <!-- Grid produk -->
        {{-- <div class="grid grid-cols-2 gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-[100px]"> --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-[100px]">
            <!-- Contoh Kartu Produk -->
            @foreach ($menus as $menu)
                <div x-data="{ open: false }" class="relative">
                    <!-- Kartu Produk -->
                    <div class="bg-white rounded-xl overflow-hidden shadow menu-card" data-menu="{{ $menu->jenis_paket }}"
                        data-category="{{ $menu->kategori }}">
                        <img src="{{ asset($menu->image) }}" alt="{{ $menu->jenis_paket }}"
                            class="w-full h-56 object-cover">
                        <div class="p-4 text-black">
                            <h3 class="text-xl font-bold mb-1">{{ $menu->jenis_paket }}</h3>
                            <p class="mb-3 text-sm">{{ $menu->card_desc }}</p>
                            <button @click="open = true" class="font-semibold inline-flex items-center hover:underline"
                                onclick="gtag('event', 'select_menu', { menu_name: '{{ $menu['kategori'] }} - {{ $menu['jenis_paket'] }}' });">
                                Selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-gray/60 backdrop-blur-sm"
                        style="display:none">
                        <div class="bg-[#111] text-white w-full max-w-md rounded-2xl shadow-lg p-6 relative">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 text-gray-300 hover:text-white text-2xl font-bold">
                                ✕
                            </button>

                            <!-- Judul dan Harga -->
                            <h2 class="text-lg font-bold text-center mb-2">
                                Nasi Tumpeng Box
                                {{ $menu->jenis_paket }} – Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </h2>
                            <div class="flex items-center justify-center space-x-2 mb-4">
                                <div class="flex-1 border-t border-white"></div>
                                <p class="text-sm text-gray-300 text-center ">
                                    {{ $menu->desc }}
                                </p>
                                <div class="flex-1 border-t border-white"></div>
                            </div>

                            <!-- Gambar -->
                            <div
                                class="mb-6 @if ($menu->image_alt) grid grid-cols-2 gap-3 @else grid grid-cols-1 @endif">
                                <img src="{{ asset($menu->image) }}" class="rounded-lg object-cover w-full h-40"
                                    alt="paket">

                                @if ($menu->image_alt)
                                    <img src="{{ asset($menu->image_alt) }}" class="rounded-lg object-cover w-full h-40"
                                        alt="paket">
                                @endif
                            </div>

                            <!-- Pilihan Menu -->
                            <div class="space-y-5 text-sm">
                                <div>
                                    <div class="flex items-center justify-center space-x-4 my-4">
                                        <div class="flex-1 border-t border-white"></div>
                                        <h3 class="font-semibold text-white whitespace-nowrap">Pilihan Menu</h3>
                                        <div class="flex-1 border-t border-white"></div>
                                    </div>
                                </div>

                                {{-- Nasi --}}
                                <div>
                                    <h4 class="font-bold bg-white text-black rounded-lg px-3 py-1 inline-block mb-2">Nasi
                                    </h4>
                                    <p class="text-gray-300">Kuning | Hijau | Ungu | Uduk | Tutug Oncom</p>
                                </div>

                                {{-- Menu Utama --}}
                                <div>
                                    <h4 class="font-bold bg-white text-black rounded-lg px-3 py-1 inline-block mb-2">Menu
                                        Utama</h4>
                                    <p class="text-gray-300">
                                        @if ($menu->jenis_paket == 'Paket A')
                                            Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor Kuning
                                        @elseif ($menu->jenis_paket == 'Paket B')
                                            Gepuk | Rendang | Semur Daging
                                        @elseif ($menu->jenis_paket == 'Paket C' || $menu->kategori == 'premium')
                                            Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap |
                                            Ayam Crispy | Ayam Opor Kuning | Gepuk | Rendang | Semur Daging
                                        @endif
                                    </p>
                                </div>

                                {{-- Lauk Tambahan --}}
                                <div>
                                    <h4 class="font-bold bg-white text-black rounded-lg px-3 py-1 inline-block mb-2">Lauk
                                        Tambahan</h4>
                                    <p class="text-gray-300">
                                        Telur Balado | Telur Dadar | Telur Pindang | Telur Kecap | Teri Kacang |
                                        Mustofa | Capcay | Acar Kuning | Urab | Mie Goreng |
                                        Soun Goreng | Asin Balado | Sambel Goreng Kentang | Kerang |
                                        Perkedel Jagung | Perkedel Kentang | Rempeyek
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol Pesan -->
                            <a id="waButton" href="#"
                                class="flex items-center justify-center w-full gap-2 py-3 mt-6 font-semibold text-white rounded-lg bg-emerald-600 hover:bg-emerald-700 transition"
                                onclick="gtag('event', 'whatsapp_click', { item_name: '{{ $menu['kategori'] }} - {{ $menu['jenis_paket'] }}' });">
                                <i class="fab fa-whatsapp text-xl text-white"></i>
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuCards = document.querySelectorAll(".menu-card");

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const card = entry.target;
                        const menuName = card.dataset.menu;
                        const category = card.dataset.category;

                        const itemName = `${category} - ${menuName}`;

                        // Kirim event ke GA4 saat card terlihat
                        gtag('event', 'view_item', {
                            item_name: itemName,
                            category: category,
                            event_label: 'Card viewed'
                        });

                        observer.unobserve(card);
                    }
                });
            }, {
                threshold: 0.5
            }); // minimal 50% dari card kelihatan

            menuCards.forEach(card => observer.observe(card));
        });
    </script>

@endsection
