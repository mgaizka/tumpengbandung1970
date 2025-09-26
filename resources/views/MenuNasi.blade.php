@extends('Layout.app')

@section('title', 'Tumpeng')

@section('content')
    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-[18px] font-bold mb-4 text-center">
            PAKET NASI
        </span>

        <!-- Judul -->
        <h2 class="text-xl sm:text-3xl md:text-4xl font-bold mb-4 text-center">
            Hidangan Nasi Kotak Spesial Yang Siap <br>
            <span class="text-white-300">Membuat Momen Anda Semakin Berkesan</span>
        </h2>

        <!-- Tab / Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-4 pt-8 mb-10">
            <a href="{{ route('menu-nasi', ['kategori' => 'nasi-bakar']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'nasi-bakar' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Nasi Bakar
            </a>
            <a href="{{ route('menu-nasi', ['kategori' => 'nasi-besek']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'nasi-besek' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Nasi Besek
            </a>
            <a href="{{ route('menu-nasi', ['kategori' => 'paket-nasi-box']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'paket-nasi-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Nasi Box
            </a>
            <a href="{{ route('menu-nasi', ['kategori' => 'lunch-box']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'lunch-box' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Premium Lunch Box
            </a>
            <a href="{{ route('menu-nasi', ['kategori' => 'nasi-bento']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'nasi-bento' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Nasi Bento
            </a>
            <a href="{{ route('menu-nasi', ['kategori' => 'ricebowl']) }}"
                class="px-5 py-2 rounded-full font-semibold transition
              {{ $kategori == 'ricebowl' ? 'bg-white text-black' : 'border border-white text-white hover:bg-white hover:text-black' }}">
                Ricebowl
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
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm"
                        style="display:none">
                        <div class="bg-[#111] text-white w-full max-w-md rounded-2xl shadow-lg p-6 relative">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 text-gray-300 hover:text-white text-2xl font-bold">
                                ✕
                            </button>

                            <!-- Judul dan Harga -->
                            <h2 class="text-lg font-bold text-center">
                                {{ $menu->jenis_paket }} – Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </h2>
                            <p class="text-center text-sm text-gray-300 mb-4">
                                {{ $menu->desc }}
                            </p>

                            <!-- Gambar -->
                            <div
                                class="mb-6 @if ($menu->image_alt) grid grid-cols-2 gap-3 @else grid grid-cols-1 @endif">
                                <img src="{{ asset('storage/' . $menu->image) }}"
                                    class="rounded-lg object-cover w-full h-40" alt="paket">

                                @if ($menu->image_alt)
                                    <img src="{{ asset('storage/' . $menu->image_alt) }}"
                                        class="rounded-lg object-cover w-full h-40" alt="paket">
                                @endif
                            </div>

                            <!-- Pilihan Menu -->
                            <div class="space-y-5 text-sm">
                                <div>
                                    <h3 class="font-semibold mb-1 border-b border-gray-600 pb-1">Pilihan Menu</h3>
                                </div>

                                {{-- Nasi --}}
                                <div>
                                    <h4 class="font-bold">Nasi</h4>
                                    <p class="text-gray-300">Kuning | Hijau | Ungu | Uduk | Tutug Oncom</p>
                                </div>

                                {{-- Menu Utama --}}
                                <div>
                                    <h4 class="font-bold">Menu Utama</h4>
                                    <p class="text-gray-300">
                                        @if ($menu->jenis_paket == 'Paket A')
                                            Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy | Ayam Opor Kuning
                                        @elseif ($menu->jenis_paket == 'Paket B')
                                            Gepuk | Rendang | Semur Daging
                                        @elseif ($menu->jenis_paket == 'Paket C')
                                            Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap |
                                            Ayam Crispy | Ayam Opor Kuning | Gepuk | Rendang | Semur Daging
                                        @endif
                                    </p>
                                </div>

                                {{-- Lauk Tambahan --}}
                                <div>
                                    <h4 class="font-bold">Lauk Tambahan</h4>
                                    <p class="text-gray-300">
                                        Telur Balado | Telur Dadar | Telur Pindang | Telur Kecap | Teri Kacang |
                                        Mustofa | Capcay | Acar Kuning | Urab | Mie Goreng |
                                        Soun Goreng | Asin Balado | Sambel Goreng Kentang | Kerang |
                                        Perkedel Jagung | Perkedel Kentang | Rempeyek
                                    </p>
                                </div>
                            </div>

                            <!-- Tombol Pesan -->
                            <button
                                class="w-full mt-6 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M16.7 14.1c-.3-.1-1.6-.8-1.8-.9s-.4-.1-.6.1c-.2.3-.7.9-.8 1.1-.1.2-.3.2-.6.1-.3-.1-1.3-.5-2.5-1.6-.9-.8-1.6-1.8-1.8-2.1-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.4.1-.1.2-.3.3-.4.1-.1.1-.2.2-.4.1-.2 0-.3 0-.4 0-.1-.6-1.4-.8-1.9-.2-.4-.4-.4-.6-.4h-.5c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3.9 2.4c.1.2 1.6 2.4 3.9 3.4 2.3 1 2.3.7 2.7.6.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.2-1-.1-.1-.3-.2-.6-.3z" />
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
