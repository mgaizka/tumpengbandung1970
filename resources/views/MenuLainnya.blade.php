@extends('Layout.app')

@section('title', 'Menu Lainnya')

@section('content')
    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-[18px] font-bold mb-4 text-center">
            PAKET LAINNYA
        </span>

        <!-- Judul -->
        <h2 class="mb-4 text-xl font-bold text-center sm:text-3xl md:text-4xl">
            Pilihan Hidangan Lengkap Yang Menjadikan Setiap <br>
            <span class="text-white-300">Momen Semakin Istimewa</span>
        </h2>

        <!-- Tab / Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-4 pt-8 mb-10">
            <a href="{{ route('menu-lainnya', ['kategori' => 'liwet-kastrol']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Liwet Castrol' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'liwet-kastrol' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Liwet Kastrol
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'prasmanan']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Prasmanan' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'prasmanan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Prasmanan
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'rujak']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Rujak' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'rujak' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Rujak
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'beubeutian-rebusan']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'beubeutian/Rujak' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'beubeutian-rebusan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Beubeutian / Rebusan
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'snack-box']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Snack Box' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'snack-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Snack Box
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'hampers']) }}"
                onclick="gtag('event', 'select_subcategory', { subcategory: 'Hampers' });"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'hampers' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Hampers
            </a>
        </div>

        <!-- Grid produk -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-[100px]">

            <!-- Contoh Kartu Produk -->
            @foreach ($menus as $menu)
                <div x-data="{ open: false }" class="relative">
                    <!-- Kartu Produk -->
                    {{-- <div class="overflow-hidden bg-white shadow rounded-xl"> --}}
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
                        class="fixed inset-0 z-50 flex items-center justify-center bg-gray/60 backdrop-blur-sm"
                        style="display:none">
                        <div class="bg-[#111] text-white w-full max-w-md rounded-2xl shadow-lg p-6 relative">

                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute text-2xl font-bold text-gray-300 top-3 right-3 hover:text-white">
                                ✕
                            </button>

                            <!-- Judul dan Harga -->
                            <h2 class="mb-2 text-lg font-bold text-center">
                                @if ($menu->kategori == 'liwet-kastrol')
                                    Liwet Kastrol {{ $menu->jenis_paket }}
                                @elseif ($menu->kategori == 'snack-box')
                                    Snack Box {{ $menu->jenis_paket }}
                                @elseif ($menu->kategori == 'prasmanan')
                                    Prasmanan {{ $menu->jenis_paket }}
                                @else
                                    {{ $menu->nama }} {{ $menu->jenis_paket }}
                                @endif
                                – Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </h2>
                            {{-- <div class="flex items-center justify-center mb-4 space-x-2">
                                <div class="flex-1 border-t border-white"></div>
                                <p class="text-sm text-center text-gray-300 whitespace-nowrap">
                                    {{ $menu->desc }}
                                </p>
                                <div class="flex-1 border-t border-white"></div>
                            </div> --}}
                            <p class="mb-4 text-sm text-center text-gray-300">
                                {{ $menu->desc }}
                            </p>

                            <!-- Gambar -->
                            <div
                                class="mb-6 @if ($menu->image_alt) grid grid-cols-2 gap-3 @else grid grid-cols-1 @endif">
                                <img src="{{ asset($menu->image) }}" class="object-cover w-full h-40 rounded-lg"
                                    alt="paket">
                                @if ($menu->image_alt)
                                    <img src="{{ asset($menu->image_alt) }}" class="object-cover w-full h-40 rounded-lg"
                                        alt="paket">
                                @endif
                            </div>

                            <!-- Pilihan Menu -->
                            <div class="space-y-5 text-sm">

                                <div class="flex items-center justify-center my-4 space-x-4">
                                    <div class="flex-1 border-t border-white"></div>
                                    <h3 class="font-semibold text-white whitespace-nowrap">Pilihan Menu</h3>
                                    <div class="flex-1 border-t border-white"></div>
                                </div>

                                {{-- Liwet Castrol --}}
                                @if ($menu->kategori == 'liwet-kastrol')
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Tumisan</h4>
                                        <p class="text-gray-300">Tumis Kangkung | Waluh | Ulukutek Leunca | Urab | Bunga
                                            Pepaya | Soun Cabe | Tumis Jamur</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Ikan Asin</h4>
                                        <p class="text-gray-300">Peda | Asin Balado | Cumi Balado | Cumi Cabe Gendot |
                                            Jambal Cabe Gendot</p>
                                    </div>
                                @endif

                                {{-- Prasmanan --}}
                                @if ($menu->kategori == 'prasmanan')
                                    @if ($menu->jenis_paket == 'Paket A')
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Pilihan Ayam</h4>
                                            <p class="text-gray-300">Ayam Lada Hitam | Ayam Kodok | Ayam Asam Manis |
                                                Ayam
                                                Goreng Saus Mentega | Bumbu Rempah</p>
                                        </div>
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Pilihan Ikan</h4>
                                            <p class="text-gray-300">Ikan Asam Manis | Ikan Pepes | Ikan Pesmol | Ikan
                                                Goreng Tepung</p>
                                        </div>
                                    @else
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Pilihan Daging</h4>
                                            <p class="text-gray-300">Lada Hitam | Rendang | Sambel Goreng
                                                Daging | Beef Teriyaki | Beef Stroganoff | Rolade </p>
                                        </div>
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Pilihan Ayam</h4>
                                            <p class="text-gray-300">Ayam Lada Hitam | Ayam Kodok | Ayam Asam Manis |
                                                Ayam
                                                Goreng Saus Mentega | Bumbu Rempah</p>
                                        </div>
                                    @endif

                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Sop/Soto</h4>
                                        <p class="text-gray-300">Sop Baso/Sosis | Sop Jamur | Kimio Kuah | Soto Ayam</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Sayuran</h4>
                                        <p class="text-gray-300">Salad Buah | Selada Bangkok | Rujak Penganten | Rujak
                                            Cuka
                                            | Asinan Bogor | Capcay | Cah Brokoli | Cah Jamur | Buncis Jagung</p>
                                    </div>
                                    @if (in_array($menu->jenis_paket, ['Paket B', 'Paket C']))
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Stal
                                            </h4>
                                            <p class="text-gray-300">Baso Tahu | Mie Kocok | Tom Yam | Sate Lontong |
                                                Pempek | Aneka Jus/Sop Buah | Kentang-Sosis | Es Krim</p>
                                        </div>
                                    @endif
                                @endif

                                {{-- Rujak --}}
                                @if ($menu->kategori == 'rujak')
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Rujak</h4>
                                        <p class="text-gray-300">Nampan Kecil | Nampan Besar | Rujak Hias</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Buah</h4>
                                        <p class="text-gray-300">Nanas | Belimbing | Kedongdong | Bengkuang | Mangga |
                                            Jambu
                                            Air | Pepaya | Jambu Kristal</p>
                                    </div>
                                @endif

                                {{-- Beubeutian / Rebusan --}}
                                @if ($menu->kategori == 'beubeutian-rebusan')
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Ukuran</h4>
                                        <p class="text-gray-300">Kecil | Besar</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Detail Isian</h4>
                                        <p class="text-gray-300">Pisang | Ubi | Kacang | Jagung | Singkong</p>
                                    </div>
                                @endif

                                {{-- Snack Box --}}
                                @if ($menu->kategori == 'snack-box')
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Kue
                                            Manis</h4>
                                        <p class="text-gray-300">Sus Fla Susu | Pisang Bolen | Puding Banana Roll |
                                            Nagasari
                                            | Bugis | Dadar Gulung | Pie Buah | Bolu Ketan Hitam | Bolu Kukus | Bolu
                                            Gulung
                                            | Lapis | Bika Ambon | Kue Lumpur | Cente | dll</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Kue
                                            Asin</h4>
                                        <p class="text-gray-300">Risoles | Pastel | Gorengan | Arem-Arem | Bakso Goreng
                                            |
                                            Bakwan Udang | Comro | Cheese Roll | Lemper | Lontong Isi | Sosis Solo | dll
                                        </p>
                                    </div>
                                    @if ($menu->jenis_paket == 'Paket C')
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Minuman</h4>
                                            <p class="text-gray-300">Teh Kotak | Teh Botol | Jus</p>
                                        </div>
                                    @endif
                                @endif
                            </div>

                            <!-- Tombol Pesan -->
                            <a href="https://wa.me/+628112202117" target="_blank"
                                onclick="gtag('event', 'whatsapp_click', { item_name: '{{ $menu['kategori'] }} - {{ $menu['jenis_paket'] }}' });"
                                class="bg-[#075E54] w-full max-w-sm py-2 rounded-xl flex items-center justify-center gap-2 hover:bg-[#0a6e63] transition mt-4">
                                <i class="text-xl text-white fab fa-whatsapp"></i>
                                <span class="text-lg font-medium text-white">Pesan Sekarang</span>
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
