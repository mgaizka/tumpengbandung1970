@extends('Layout.app')

@section('title', 'Menu Lainnya')

@section('content')
    <div class="text-white px-4 pt-[40px] lg:px-[2cm] lg:pt-[90px]">
        <h2 class="text-xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            PAKET LAINNYA
        </h2>

        <h2 class="text-xl font-bold text-center text-gray-100 lg:text-3xl">
            Pilihan Hidangan Lengkap Yang Menjadikan Setiap
            <br class="hidden sm:block">
            <span class="text-gray-200">Momen Semakin Istimewa</span>
        </h2>


        <!-- Tab / Filter Kategori -->
        <div class="relative flex items-center justify-center">

            <!-- Panah kiri -->
            <div class="absolute left-0 z-10 flex items-center justify-center text-white md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </div>

            <!-- Div filter (tidak diubah class-nya sama sekali) -->
            <div class="overflow-x-auto md:overflow-x-auto lg:overflow-visible no-scrollbar">
                <div
                    class="flex flex-nowrap lg:flex-wrap justify-start lg:justify-center gap-3 sm:gap-4 md:gap-5 pt-5 sm:pt-7 md:pt-8 mb-6 sm:mb-10 snap-x snap-mandatory scroll-smooth px-6 sm:px-8">

                    <a href="{{ route('menu-lainnya', ['kategori' => 'liwet-kastrol']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'liwet-kastrol' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Liwet Kastrol
                    </a>

                    <a href="{{ route('menu-lainnya', ['kategori' => 'prasmanan']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'prasmanan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Prasmanan
                    </a>

                    <a href="{{ route('menu-lainnya', ['kategori' => 'rujak']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'rujak' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Rujak
                    </a>

                    <a href="{{ route('menu-lainnya', ['kategori' => 'beubeutian-rebusan']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'beubeutian-rebusan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Beubeutian / Rebusan
                    </a>

                    <a href="{{ route('menu-lainnya', ['kategori' => 'snack-box']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'snack-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Snack Box
                    </a>

                    <a href="{{ route('menu-lainnya', ['kategori' => 'hampers']) }}"
                        class="flex-shrink-0 snap-start px-4 sm:px-6 py-2 sm:py-2.5 rounded-full text-sm sm:text-base md:text-lg font-semibold transition
        {{ $kategori == 'hampers' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                        Hampers
                    </a>
                </div>
            </div>

            <!-- Panah kanan -->
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
                                @if ($menu->kategori == 'rujak' || $menu->kategori == 'beubeutian-rebusan')
                                    <div class="flex items-center justify-center my-4 space-x-4">
                                        <div class="flex-1 border-t border-white"></div>
                                        <h3 class="font-semibold text-white whitespace-nowrap">Detail Isian</h3>
                                        <div class="flex-1 border-t border-white"></div>
                                    </div>
                                @elseif($menu->kategori == 'hampers')
                                @else
                                    <div class="flex items-center justify-center my-4 space-x-4">
                                        <div class="flex-1 border-t border-white"></div>
                                        <h3 class="font-semibold text-white whitespace-nowrap">Pilihan Menu</h3>
                                        <div class="flex-1 border-t border-white"></div>
                                    </div>
                                @endif

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
                                    @if (in_array($menu->jenis_paket, ['Paket B', 'Paket C']))
                                        <div>
                                            <h4
                                                class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                                Menu Pilihan Stal
                                            </h4>
                                            <p class="text-gray-300">Baso Tahu | Mie Kocok | Tom Yam | Sate Lontong |
                                                Pempek | Aneka Jus/Sop Buah | Kentang-Sosis | Es Krim</p>
                                        </div>
                                    @endif
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Pilihan Sop/Soto</h4>
                                        <p class="text-gray-300">Sop Baso/Sosis | Sop Jamur | Kimio Kuah | Soto Ayam | Soto
                                            Bandung</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Sayuran</h4>
                                        <p class="text-gray-300">Salad Buah | Selada Bangkok | Rujak Penganten | Rujak
                                            Cuka
                                            | Asinan Bogor | Capcay | Cah Brokoli | Cah Jamur | Buncis Jagung</p>
                                    </div>
                                @endif

                                {{-- Rujak --}}
                                @if ($menu->kategori == 'rujak')
                                    <div>
                                        <p class="text-gray-300">Nanas | Belimbing | Kedongdong | Bengkuang | Mangga |
                                            Jambu Air | Pepaya | Jambu Kristal</p>
                                    </div>
                                @endif

                                {{-- Beubeutian / Rebusan --}}
                                @if ($menu->kategori == 'beubeutian-rebusan')
                                    <div>
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
                                            Nagasari | Bugis | Dadar Gulung | Pie Buah | Bolu Pisang | Bolu Ketan Hitam |
                                            Bolu Kukus | Bolu Gulung | Lapis | Bika Ambon | Kue Lumpur | Cente | dll</p>
                                    </div>
                                    <div>
                                        <h4 class="inline-block px-3 py-1 mb-2 font-bold text-black bg-white rounded-lg">
                                            Kue
                                            Asin</h4>
                                        <p class="text-gray-300">Risoles | Pastel | Gorengan | Arem-Arem | Bakso Goreng
                                            | Bakwan Udang | Comro | Cheese Roll | Lemper | Lontong Isi | Sosis Solo | dll
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
