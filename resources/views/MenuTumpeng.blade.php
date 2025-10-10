@extends('Layout.app')

@section('title', 'Menu Tumpeng')

@section('content')

    <div class="text-white px-4 pt-[40px] lg:px-[2cm] lg:pt-[90px]">
        <!-- Tag kecil di atas -->
        <h2 class="text-xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            PAKET TUMPENG
        </h2>

        <!-- Judul -->
        <h2 class="text-xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            Rayakan Momen Istimewa Dengan <br>
            <span class="text-gray-200">Tumpeng Bandung 1970</span>
        </h2>

        <div class="relative flex items-center justify-center">

            <div class="absolute left-0 z-10 flex items-center justify-center text-white md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </div>

            <!-- Tab / Filter Kategori -->
            <div class="overflow-x-auto md:overflow-x-auto lg:overflow-visible no-scrollbar">
                <div
                    class="flex flex-nowrap lg:flex-wrap justify-start lg:justify-center gap-3 sm:gap-4 md:gap-5 pt-5 sm:pt-7 md:pt-8 mb-6 sm:mb-10 snap-x snap-mandatory scroll-smooth px-3 sm:px-4">
                    <a href="{{ route('menu-tumpeng', ['kategori' => 'nasi-box']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Box' });"
                        class="snap-start flex-shrink-0 px-5 py-2 mx-2 rounded-full font-semibold transition
            {{ $kategori == 'nasi-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Nasi Tumpeng Box
                    </a>

                    <a href="{{ route('menu-tumpeng', ['kategori' => 'mini']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Mini' });"
                        class="snap-start flex-shrink-0 px-5 py-2 mx-2 rounded-full font-semibold transition
            {{ $kategori == 'mini' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Tumpeng Mini
                    </a>

                    <a href="{{ route('menu-tumpeng', ['kategori' => 'tampah']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Tampah' });"
                        class="snap-start flex-shrink-0 px-5 py-2 mx-2 rounded-full font-semibold transition
            {{ $kategori == 'tampah' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Tumpeng Tampah
                    </a>

                    <a href="{{ route('menu-tumpeng', ['kategori' => 'premium']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Tumpeng Premium' });"
                        class="snap-start flex-shrink-0 px-5 py-2 mx-2 rounded-full font-semibold transition
            {{ $kategori == 'premium' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Tumpeng Premium
                    </a>
                </div>
            </div>

            <div class="absolute right-0 z-10 flex items-center justify-center text-white md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>

        </div>

        <!-- Grid produk -->
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
                            <h3 class="text-xl font-bold mb-1">
                                @if ($menu->kategori == 'premium')
                                    Tumpeng Premium {{ $menu->jenis_paket }}
                                @else
                                    {{ $menu->jenis_paket }}
                                @endif
                            </h3>
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
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-3 sm:p-6 md:p-8"
                        style="display:none">
                        <div
                            class="bg-[#111] text-white w-full max-w-4xl md:max-w-3xl sm:max-w-md rounded-2xl shadow-2xl p-6 md:p-8 relative overflow-y-auto max-h-[90vh] no-scrollbar">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 text-gray-300 hover:text-white text-2xl font-bold">
                                ✕
                            </button>

                            <!-- Judul dan Harga -->
                            <h2 class="mb-2 text-lg font-bold text-center">
                                @if ($menu->kategori == 'nasi-box')
                                    Nasi Tumpeng Box {{ $menu->jenis_paket }}
                                @elseif ($menu->kategori == 'mini')
                                    Tumpeng Mini {{ $menu->jenis_paket }}
                                @elseif ($menu->kategori == 'tampah')
                                    Tumpeng Tampah {{ $menu->jenis_paket }}
                                @elseif ($menu->kategori == 'premium')
                                    Tumpeng Premium {{ $menu->jenis_paket }}
                                @else
                                    {{ $menu->nama }} {{ $menu->jenis_paket }}
                                @endif
                                – Rp {{ number_format($menu->harga, 0, ',', '.') }}
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
                                        Soun Goreng | Asin Balado | Sambel Goreng Kentang | Kering Tempe |
                                        Perkedel Jagung | Perkedel Kentang | Rempeyek
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol Pesan -->
                            <a href="#"
                                class="waButton flex items-center justify-center w-full gap-2 py-3 mt-6 font-semibold text-white rounded-lg bg-emerald-600 hover:bg-emerald-700 transition"
                                data-item="{{ $menu['kategori'] }} - {{ $menu['jenis_paket'] }}">
                                <i class="fab fa-whatsapp text-xl text-white"></i> Pesan Sekarang
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

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection
