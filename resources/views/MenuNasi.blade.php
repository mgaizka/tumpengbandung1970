@extends('Layout.app')

@section('title', 'Menu Nasi')

@section('content')
    <div class="text-white px-4 pt-[40px] lg:px-[2cm] lg:pt-[90px]">
        <!-- Tag kecil di atas -->
        <h2 class="text-xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            PAKET NASI
        </h2>

        <!-- Judul -->
        <h2 class="text-xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            Hidangan Nasi Kotak Spesial Yang Siap <br>
            <span class="text-gray-200">Membuat Momen Anda Semakin Berkesan</span>
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
                    class="flex flex-nowrap lg:flex-wrap justify-start lg:justify-center
                gap-3 sm:gap-4 md:gap-5 pt-5 sm:pt-7 md:pt-8 mb-6 sm:mb-10
                snap-x snap-mandatory scroll-smooth px-3 sm:px-4">

                    <a href="{{ route('menu-nasi', ['kategori' => 'nasi-bakar']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Nasi Bakar' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'nasi-bakar' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Nasi Bakar
                    </a>

                    <a href="{{ route('menu-nasi', ['kategori' => 'nasi-besek']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Nasi Besek' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'nasi-besek' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Nasi Besek
                    </a>

                    <a href="{{ route('menu-nasi', ['kategori' => 'paket-nasi-box']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Paket Nasi Box' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'paket-nasi-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Nasi Box
                    </a>

                    <a href="{{ route('menu-nasi', ['kategori' => 'lunch-box']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Premium Lunch Box' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'lunch-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Premium Lunch Box
                    </a>

                    <a href="{{ route('menu-nasi', ['kategori' => 'nasi-bento']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Nasi Bento' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'nasi-bento' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Nasi Bento
                    </a>

                    <a href="{{ route('menu-nasi', ['kategori' => 'ricebowl']) }}"
                        onclick="gtag('event', 'select_subcategory', { subcategory: 'Ricebowl' });"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full
                   text-sm sm:text-base md:text-lg font-semibold transition
                   {{ $kategori == 'ricebowl' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Ricebowl
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
                    <div class="overflow-hidden bg-white shadow rounded-xl menu-card" data-menu="{{ $menu->jenis_paket }}"
                        data-category="{{ $menu->kategori }}">
                        <img src="{{ asset($menu->image) }}" alt="{{ $menu->jenis_paket }}"
                            class="object-cover w-full h-56">
                        <div class="p-4 text-black">
                            <h3 class="mb-1 text-xl font-bold">{{ $menu->jenis_paket }}</h3>
                            <p class="mb-3 text-sm">{{ $menu->card_desc }}</p>
                            <button @click="open = true" class="inline-flex items-center font-semibold hover:underline"
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
                            class="bg-[#111] text-white w-full max-w-4xl md:max-w-3xl sm:max-w-md rounded-2xl shadow-2xl p-6 md:p-8 relative overflow-y-auto max-h-[90vh]">
                            <button @click="open = false"
                                class="absolute text-2xl font-bold text-gray-300 top-3 right-3 hover:text-white">✕</button>

                            <h2 class="text-lg font-bold text-center">{{ $menu->jenis_paket }} – Rp
                                {{ number_format($menu->harga, 0, ',', '.') }}</h2>
                            <p class="mb-4 text-sm text-center text-gray-300">{{ $menu->desc }}</p>

                            <div class="mb-6 {{ $menu->image_alt ? 'grid grid-cols-2 gap-3' : 'grid grid-cols-1' }}">
                                <img src="{{ asset($menu->image) }}" class="object-cover w-full h-40 rounded-lg"
                                    alt="paket">
                                @if ($menu->image_alt)
                                    <img src="{{ asset($menu->image_alt) }}" class="object-cover w-full h-40 rounded-lg"
                                        alt="paket">
                                @endif
                            </div>

                            @php
                                $paket = collect(['A', 'B', 'C'])->first(
                                    fn($p) => Str::contains($menu->jenis_paket, "Paket $p"),
                                );
                                $judulMenu = fn(
                                    $text,
                                ) => "<h4 class='font-bold bg-white text-black rounded-lg px-3 py-1 inline-block mb-2'>$text</h4>";
                                $divider = fn($title = 'Pilihan Menu') => "
                <div class='flex items-center justify-center space-x-4 my-4'>
                    <div class='flex-1 border-t border-white'></div>
                    <h3 class='font-semibold text-white whitespace-nowrap'>$title</h3>
                    <div class='flex-1 border-t border-white'></div>
                </div>";
                                $menuUtama = [
                                    'A' =>
                                        'Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor Kuning',
                                    'B' => 'Gepuk | Rendang | Semur Daging',
                                    'C' =>
                                        'Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor Kuning | Gepuk | Rendang | Semur Daging',
                                ];
                                $tumisan =
                                    'Soun | Ase Cabe | Capcay | Bihun Goreng | Mie Goreng | Sambal Goreng Kentang | Tumis Tempe | Tumis Jambal Cabe Gendot | Cumi Balado | Urab | Cah Jagung | Ase Tahu Cabe | Buncis Jagung | Acar Ketimun.';
                                $keringan =
                                    'Tahu Goreng | Tempe Goreng | Perkedel Jagung | Pekedel Kentang | Mustofa | Kering Tempe | Asin Balado';
                                $tambahan = 'Jeruk (Rp 3000) | Pisang (Rp 2000) | Pudding (Rp 4000)';
                            @endphp

                            <div class="space-y-5 text-sm">
                                {{-- Nasi Bakar --}}
                                @if ($menu->jenis_paket == 'Nasi Bakar')
                                    {!! $divider() !!}
                                    {!! $judulMenu('Pilihan Nasi') !!}
                                    <p class="text-gray-300">Nasi Bakar Ayam Suwir Kemangi | Tongkol Pedas | Teri | Telur
                                        Asin | Jambal Cabe | Sambal Cumi</p>
                                    {!! $judulMenu('Tambahan') !!}
                                    <p class="text-gray-300">Tahu Goreng (Rp 2000) | Tempe Goreng (Rp 3000) | Kerupuk (Rp
                                        2000)</p>

                                    {{-- Nasi Bakar / Besek / Paket Box --}}
                                @elseif (in_array($menu->kategori, ['nasi-bakar', 'nasi-besek', 'paket-nasi-box']))
                                    {!! $divider($menu->kategori == 'paket-nasi-box' ? 'Detail Isian' : 'Pilihan Menu') !!}
                                    {!! $judulMenu('Pilihan Nasi') !!}
                                    <p class="text-gray-300">
                                        {{ $menu->kategori == 'nasi-bakar' ? 'Nasi Bakar Ayam Suwir Kemangi | Tongkol Pedas | Teri | Telur Asin | Jambal Cabe | Sambal Cumi' : 'Putih | Merah | Liwet | Tutug Oncom' }}
                                    </p>

                                    {!! $judulMenu($paket == 'B' ? 'Menu Daging' : 'Menu Utama') !!}
                                    <p class="text-gray-300">
                                        @if ($menu->kategori == 'paket-nasi-box')
                                            @if ($paket == 'A')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor
                                                Kuning | Ayam Saus Asam Manis | Ayam Goreng Mentega
                                            @elseif ($paket == 'B')
                                                Gepuk | Rendang | Semur Daging | Sapi Lada Hitam | Daging Teriyaki
                                            @else
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor
                                                Kuning | Ayam Saus Asam Manis | Ayam Goreng Mentega | Gepuk | Rendang |
                                                Semur Daging | Sapi Lada Hitam | Daging Teriyaki
                                            @endif
                                        @else
                                            {{ $menuUtama[$paket] ?? '' }}
                                        @endif
                                    </p>

                                    {{-- Tambahan bagian tumis, keringan, tambahan untuk nasi-bakar dan besek --}}
                                    @if (in_array($menu->kategori, ['nasi-bakar', 'nasi-besek']))
                                        {!! $judulMenu('Pilihan Tumisan') !!}<p class="text-gray-300">{{ $tumisan }}</p>
                                        {!! $judulMenu('Keringan') !!}<p class="text-gray-300">{{ $keringan }}</p>
                                        {!! $judulMenu('Tambahan') !!}<p class="text-gray-300">{{ $tambahan }}</p>
                                    @elseif ($menu->kategori == 'paket-nasi-box')
                                        {!! $judulMenu('Pilihan Tumisan') !!}<p class="text-gray-300">{{ $tumisan }}</p>
                                        {!! $judulMenu('Keringan') !!}<p class="text-gray-300">{{ $keringan }}</p>
                                        {!! $judulMenu('Tambahan') !!}<p class="text-gray-300">{{ $tambahan }}</p>
                                    @endif

                                    {{-- Nasi Bento --}}
                                @elseif ($menu->kategori == 'nasi-bento')
                                    {!! $divider() !!}
                                    {!! $judulMenu('Nasi') !!}<p class="text-gray-300">Putih | Kuning | Uduk</p>
                                    {!! $judulMenu($paket == 'B' ? 'Menu Daging' : 'Menu Utama') !!}
                                    <p class="text-gray-300">
                                        @if ($paket == 'A')
                                            Chicken Katsu | Ayam Bakar | Ayam Goreng | Ayam Teriyaki
                                        @elseif ($paket == 'B')
                                            Daging Teriyaki | Gepuk | Semur Daging
                                        @else
                                            Chicken Katsu | Ayam Bakar | Ayam Goreng | Ayam Teriyaki | Daging Teriyaki |
                                            Gepuk | Semur Daging
                                        @endif
                                    </p>
                                    {!! $judulMenu('Keringan') !!}<p class="text-gray-300">Tahu Goreng | Tempe Goreng | Perkedel
                                        Jagung | Pekedel Kentang | Mustofa | Kering Tempe | Mie Goreng</p>

                                    {{-- Ricebowl --}}
                                @elseif ($menu->kategori == 'ricebowl')
                                    {!! $divider() !!}
                                    {!! $judulMenu($paket == 'B' ? 'Menu Daging' : 'Menu Utama') !!}
                                    <p class="text-gray-300">
                                        {{ $paket == 'A' ? 'Chicken Karage | Chicken Katsu' : 'Dori Karage | Beef' }}</p>
                                    {!! $judulMenu('Pilihan Bumbu') !!}<p class="text-gray-300">Lada Hitam | Lada Garam | Chili Oil |
                                        Sambal Korek | Sambal Matah</p>
                                    {!! $judulMenu('Tambahan') !!}<p class="text-gray-300">Telur (Rp 5000) | Aneka Sauce (Rp 5000)
                                    </p>

                                    {{-- Paket Spesial --}}
                                @elseif (in_array($menu->jenis_paket, ['Nasi Berkat', 'Nasi Bali', 'Nasi Nyunda']))
                                    {!! $divider('Detail Isian') !!}
                                    <p class="text-gray-300">
                                        @switch($menu->jenis_paket)
                                            @case('Nasi Berkat')
                                                Semur Daging | Ayam Goreng | Telur Pindang | Ase Buncis Cabe | Perkedel Jagung |
                                                Sambal | Kerupuk | Air Mineral Botol | Buah/Pudding
                                            @break

                                            @case('Nasi Bali')
                                                Sambal Goreng Daging | Sate Lilit | Telur Pindang | Buncis Bumbu Bali | Sambal |
                                                Kerupuk | Air Mineral Botol | Buah/Puding
                                            @break

                                            @case('Nasi Nyunda')
                                                Nasi Timbel | Gepuk | Ayam Goreng/Bakar | Tumis Jamur | Asin Balado/Jambal | Lalab
                                                Sambal | Air Mineral Botol | Buah/Puding
                                            @break
                                        @endswitch
                                    </p>
                                @endif
                            </div>

                            <a id="waButton" href="#"
                                class="flex items-center justify-center w-full gap-2 py-3 mt-6 font-semibold text-white rounded-lg bg-emerald-600 hover:bg-emerald-700 transition"
                                onclick="gtag('event', 'whatsapp_click', { item_name: '{{ $menu['kategori'] }} - {{ $menu['jenis_paket'] }}' });">
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
