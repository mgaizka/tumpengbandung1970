@extends('Layout.app')

@section('title', 'Tumpeng')

@section('content')
    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-[18px] font-bold mb-4 text-center">
            PAKET LAINNYA
        </span>

        <!-- Judul -->
        <h2 class="text-xl sm:text-3xl md:text-4xl font-bold mb-4 text-center">
            Pilihan Hidangan Lengkap Yang Menjadikan Setiap <br>
            <span class="text-white-300">Momen Semakin Istimewa</span>
        </h2>

        <!-- Tab / Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-4 pt-8 mb-10">
            <a href="{{ route('menu-lainnya', ['kategori' => 'liwet-castrol']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'liwet-castrol' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Liwet Kastrol
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'prasmanan']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'prasmanan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Prasmanan
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'rujak']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'rujak' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Rujak
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'beubeutian-rebusan']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'beubeutian-rebusan' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Beubeutian / Rebusan
            </a>
            <a href="{{ route('menu-lainnya', ['kategori' => 'snack-box']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'snack-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Snack Box
            </a>
        </div>

        <!-- Grid produk -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-[100px]">

            <!-- Contoh Kartu Produk -->
            @foreach ($menus as $menu)
                <div x-data="{ open: false }" class="relative">
                    <!-- Kartu Produk -->
                    <div class="bg-white rounded-xl overflow-hidden shadow">
                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->jenis_paket }}"
                            class="w-full h-56 object-cover">
                        <div class="p-4 text-black">
                            <h3 class="text-xl font-bold mb-1">{{ $menu->jenis_paket }}</h3>
                            <p class="mb-3 text-sm">{{ $menu->card_desc }}</p>
                            <button @click="open = true" class="font-semibold inline-flex items-center hover:underline">
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
                        class="fixed inset-0 z-50 flex items-center justify-center bg-[#313131]/70 backdrop-blur-sm"
                        style="display:none">
                        <div class="bg-[#111] text-white w-full max-w-lg rounded-xl shadow-lg p-6 relative">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 text-gray-300 hover:text-white text-2xl font-bold">
                                ✕
                            </button>

                            <!-- Judul dan Subjudul -->
                            <h2 class="text-lg font-bold text-center mb-1">
                                Nasi Tumpeng Box {{ $menu->jenis_paket }} – Rp
                                {{ number_format($menu->harga, 0, ',', '.') }}
                            </h2>
                            <p class="text-center text-sm mb-4">
                                {{ $menu->desc }}
                            </p>

                            <!-- Gambar 2 kolom -->
                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <img src="{{ asset('foto1.jpeg') }}" class="rounded-lg object-cover w-full h-32"
                                    alt="paket">
                                <img src="{{ asset('foto2.jpeg') }}" class="rounded-lg object-cover w-full h-32"
                                    alt="paket">
                            </div>

                            <!-- Pilihan Menu -->
                            <div class="space-y-5 text-sm">
                                <div>
                                    <h3 class="font-semibold mb-1 border-b border-gray-600 pb-1">Pilihan Menu</h3>
                                </div>
                                <div>
                                    <h4 class="font-bold">Nasi</h4>
                                    <p class="text-gray-300">
                                        Kuning | Hijau | Ungu | Uduk | Tutug Oncom
                                    </p>
                                </div>
                                <div>
                                    <h4 class="font-bold">Menu Utama</h4>
                                    <p class="text-gray-300">
                                        Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap |
                                        Ayam Crispy | Ayam Opor Kuning
                                    </p>
                                </div>
                                <div>
                                    <h4 class="font-bold">Lauk Tambahan</h4>
                                    <p class="text-gray-300">
                                        Telur Balado | Telur Dadar | Telur Pindang | Telur Kecap |
                                        Teri Kacang | Mustofa | Capcay | Acar Kuning | Urab | Mie Goreng |
                                        Soun Goreng | Asin Balado | Sambel Goreng Kentang | Kerang |
                                        Perkedel Jagung | Perkedel Kentang | Rempeyek
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol Pesan -->
                            <button
                                class="w-full mt-8 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                </svg>
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
