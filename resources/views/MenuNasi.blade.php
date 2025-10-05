@extends('Layout.app')

@section('title', 'Tumpeng')

@section('content')
    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-[18px] font-bold mb-4 text-center">
            PAKET NASI
        </span>

        <!-- Judul -->
        <h2 class="mb-4 text-xl font-bold text-center sm:text-3xl md:text-4xl">
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
                    <div class="overflow-hidden bg-white shadow rounded-xl">
                        <img src="{{ asset($menu->image) }}" alt="{{ $menu->jenis_paket }}"
                            class="object-cover w-full h-56">
                        <div class="p-4 text-black">
                            <h3 class="mb-1 text-xl font-bold">{{ $menu->jenis_paket }}</h3>
                            <p class="mb-3 text-sm">{{ $menu->card_desc }}</p>
                            <button @click="open = true" class="inline-flex items-center font-semibold hover:underline">
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
                                class="absolute text-2xl font-bold text-gray-300 top-3 right-3 hover:text-white">
                                ✕
                            </button>

                            <!-- Judul dan Harga -->
                            <h2 class="text-lg font-bold text-center">
                                {{ $menu->jenis_paket }} – Rp {{ number_format($menu->harga, 0, ',', '.') }}
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
                                <div>
                                    <h3 class="pb-1 mb-1 font-semibold border-b border-gray-600">Pilihan Menu</h3>
                                </div>

                                @php
                                    $paket = null;
                                    if (\Illuminate\Support\Str::contains($menu->jenis_paket, 'Paket A')) {
                                        $paket = 'Paket A';
                                    } elseif (\Illuminate\Support\Str::contains($menu->jenis_paket, 'Paket B')) {
                                        $paket = 'Paket B';
                                    } elseif (\Illuminate\Support\Str::contains($menu->jenis_paket, 'Paket C')) {
                                        $paket = 'Paket C';
                                    }
                                @endphp

                                {{-- Nasi Bakar --}}
                                @if ($menu->jenis_paket == 'Nasi Bakar')
                                    <div>
                                        <h4 class="font-bold">Pilihan Nasi</h4>
                                        <p class="text-gray-300">
                                            Nasi Bakar Ayam Suwir Kemangi | Nasi Bakar Tongkol Pedas |
                                            Nasi Bakar Teri | Nasi Bakar Telur Asin | Nasi Bakar Jambal Cabe | Nasi Bakar
                                            Sambal Cumi
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="font-bold">Tambahan</h4>
                                        <p class="text-gray-300">
                                            Telur (Rp 2000) | Tempe Goreng (Rp 3000) | Kerupuk (Rp 2000)
                                        </p>
                                    </div>
                                @elseif ($menu->kategori == 'nasi-bakar')
                                    <div>
                                        <h4 class="font-bold">Pilihan Nasi</h4>
                                        <p class="text-gray-300">
                                            Nasi Bakar Ayam Suwir Kemangi | Nasi Bakar Tongkol Pedas |
                                            Nasi Bakar Teri | Nasi Bakar Telur Asin | Nasi Bakar Jambal Cabe |
                                            Nasi Bakar Sambal Cumi
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">
                                            @if ($paket == 'Paket A')
                                                Menu Utama
                                            @elseif ($paket == 'Paket B')
                                                Menu Daging
                                            @elseif ($paket == 'Paket C')
                                                Menu Utama
                                            @endif
                                        </h4>
                                        <p class="text-gray-300">
                                            @if ($paket == 'Paket A')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning
                                            @elseif ($paket == 'Paket B')
                                                Gepuk | Rendang | Semur Daging
                                            @elseif ($paket == 'Paket C')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning | Gepuk | Rendang | Semur Daging
                                            @endif
                                        </p>
                                    </div>

                                    {{-- Tumisan --}}
                                    <div>
                                        <h4 class="font-bold">Pilihan Tumisan</h4>
                                        <p class="text-gray-300">
                                            Soun | Ase Cabe | Capcay | Bihun Goreng | Mie Goreng | Sambal Goreng Kentang |
                                            Tumis Tempe | Tumis Jambal + Cabe Gendot | Cumi Balado | Urab | Cah Jagung |
                                            Ase Tahu Cabe | Buncis Jagung | Acar Ketimun dll.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Keringan</h4>
                                        <p class="text-gray-300">
                                            Tahu Goreng | Tempe Goreng | Perkedel Jagung | Pekedel Kentang | Mustofa |
                                            Kering Tempe | Asin Balado
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Tambahan</h4>
                                        <p class="text-gray-300">
                                            Telur (Rp 2000) | Tempe Goreng (Rp 3000) | Kerupuk (Rp 2000)
                                        </p>
                                    </div>

                                    {{-- Tumisan --}}
                                @elseif ($menu->kategori == 'nasi-besek')
                                    <div>
                                        <h4 class="font-bold">Pilihan Nasi</h4>
                                        <p class="text-gray-300">
                                            Putih | Merah | Liwet | Tutug Oncom
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">
                                            @if ($paket == 'Paket A')
                                                Menu Utama
                                            @elseif ($paket == 'Paket B')
                                                Menu Daging
                                            @elseif ($paket == 'Paket C')
                                                Menu Utama
                                            @endif
                                        </h4>
                                        <p class="text-gray-300">
                                            @if ($paket == 'Paket A')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning
                                            @elseif ($paket == 'Paket B')
                                                Gepuk | Rendang | Semur Daging
                                            @elseif ($paket == 'Paket C')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning | Gepuk | Rendang | Semur Daging
                                            @endif
                                        </p>
                                    </div>

                                    {{-- Tumisan --}}
                                    <div>
                                        <h4 class="font-bold">Pilihan Tumisan</h4>
                                        <p class="text-gray-300">
                                            Soun | Ase Cabe | Capcay | Bihun Goreng | Mie Goreng | Sambal Goreng Kentang |
                                            Tumis Tempe | Tumis Jambal + Cabe Gendot | Cumi Balado | Urab | Cah Jagung |
                                            Ase Tahu Cabe | Buncis Jagung | Acar Ketimun dll.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Keringan</h4>
                                        <p class="text-gray-300">
                                            Tahu Goreng | Tempe Goreng | Perkedel Jagung | Pekedel Kentang | Mustofa |
                                            Kering Tempe | Asin Balado
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Tambahan</h4>
                                        <p class="text-gray-300">
                                            Telur (Rp 2000) | Tempe Goreng (Rp 3000) | Kerupuk (Rp 2000)
                                        </p>
                                    </div>

                                    {{-- Nasi Box --}}
                                @elseif ($menu->kategori == 'paket-nasi-box')
                                    <div>
                                        <h4 class="font-bold">Pilihan Nasi</h4>
                                        <p class="text-gray-300">
                                            Putih | Merah | Liwet | Tutug Oncom
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">
                                            @if ($paket == 'Paket A')
                                                Menu Utama
                                            @elseif ($paket == 'Paket B')
                                                Menu Daging
                                            @elseif ($paket == 'Paket C')
                                                Menu Utama
                                            @endif
                                        </h4>
                                        <p class="text-gray-300">
                                            @if ($paket == 'Paket A')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning
                                            @elseif ($paket == 'Paket B')
                                                Gepuk | Rendang | Semur Daging
                                            @elseif ($paket == 'Paket C')
                                                Ayam Bakar | Ayam Goreng Serundeng | Ayam Kecap | Ayam Crispy |
                                                Ayam Opor Kuning | Gepuk | Rendang | Semur Daging
                                            @endif
                                        </p>
                                    </div>

                                    {{-- Tumisan --}}
                                    <div>
                                        <h4 class="font-bold">Pilihan Tumisan</h4>
                                        <p class="text-gray-300">
                                            Soun | Ase Cabe | Capcay | Bihun Goreng | Mie Goreng | Sambal Goreng Kentang |
                                            Tumis Tempe | Tumis Jambal + Cabe Gendot | Cumi Balado | Urab | Cah Jagung |
                                            Ase Tahu Cabe | Buncis Jagung | Acar Ketimun dll.
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Keringan</h4>
                                        <p class="text-gray-300">
                                            Tahu Goreng | Tempe Goreng | Perkedel Jagung | Pekedel Kentang | Mustofa |
                                            Kering Tempe | Asin Balado
                                        </p>
                                    </div>

                                    <div>
                                        <h4 class="font-bold">Tambahan</h4>
                                        <p class="text-gray-300">
                                            Telur (Rp 2000) | Tempe Goreng (Rp 3000) | Kerupuk (Rp 2000)
                                        </p>
                                    </div>
                                @elseif ($menu->kategori == 'nasi-bento')
                                    <div>
                                        <h4 class="font-bold">Nasi</h4>
                                        <p class="text-gray-300">
                                            Putih | Kuning | Uduk
                                        </p>
                                    </div>

                                    {{-- Menu Utama / Daging --}}
                                    <div>
                                        <h4 class="font-bold">
                                            @if ($paket == 'Paket A')
                                                Menu Utama
                                            @elseif ($paket == 'Paket B')
                                                Menu Daging
                                            @elseif ($paket == 'Paket C')
                                                Menu Utama
                                            @endif
                                        </h4>
                                        <p class="text-gray-300">
                                            @if ($paket == 'Paket A')
                                                Chicken Katsu | Ayam Bakar | Ayam Goreng | Ayam Teriyaki
                                            @elseif ($paket == 'Paket B')
                                                Daging Teriyaki | Gepuk | Semur Daging
                                            @elseif ($paket == 'Paket C')
                                                Chicken Katsu | Ayam Bakar | Ayam Goreng | Ayam Teriyaki |
                                                Daging Teriyaki | Gepuk | Semur Daging
                                            @endif
                                        </p>
                                    </div>

                                    {{-- Keringan --}}
                                    <div>
                                        <h4 class="font-bold">Keringan</h4>
                                        <p class="text-gray-300">
                                            Tahu Goreng | Tempe Goreng | Perkedel Jagung | Pekedel Kentang | Mustofa |
                                            Kering Tempe | Asin Balado
                                        </p>
                                    </div>

                                    {{-- Ricebowl --}}
                                @elseif ($menu->kategori == 'ricebowl')
                                    {{-- Menu Utama / Daging --}}
                                    <div>
                                        <h4 class="font-bold">
                                            @if ($paket == 'Paket A')
                                                Menu Utama
                                            @elseif ($paket == 'Paket B')
                                                Menu Daging
                                            @elseif ($paket == 'Paket C')
                                                Menu Utama
                                            @endif
                                        </h4>
                                        <p class="text-gray-300">
                                            @if ($paket == 'Paket A')
                                                Chicken Karage | Chicken Katsu | Ayam Goreng | Ayam Teriyaki
                                            @elseif ($paket == 'Paket B')
                                                Dori Karage | Beef |
                                            @elseif ($paket == 'Paket C')
                                                Chicken Karage | Chicken Katsu | Dori Karage | Beef |
                                            @endif
                                        </p>
                                    </div>

                                    {{-- Bumbu --}}
                                    <div>
                                        <h4 class="font-bold">Pilihan Bumbu</h4>
                                        <p class="text-gray-300">
                                            Lada Hitam | Lada Garam | Chili Oil | Sambal Korek | Sambal Matah |
                                        </p>
                                    </div>

                                    {{-- Tambahan --}}
                                    <div>
                                        <h4 class="font-bold">Tambahan</h4>
                                        <p class="text-gray-300">
                                            Telur (Rp 5000) | Aneka Sauce (Rp 5000) |
                                        </p>
                                    </div>
                                @elseif ($menu->jenis_paket == 'Nasi Berkat')
                                    <div>
                                        <p class="text-gray-300">
                                            Sambal Goreng Daging | Sate Lilit | Telur Pindang |
                                            Ase Buncis Cabe | Perkedel Jagung | Sambal |
                                            Kerupuk | Air Mineral Botol | Buah/Puding
                                        </p>
                                    </div>
                                @elseif ($menu->jenis_paket == 'Nasi Bali')
                                    <div>
                                        <p class="text-gray-300">
                                            Sambal Goreng Daging | Sate Lilit | Telur Pindang |
                                            Ase Buncis Bali | Sambal | Kerupuk | Air Mineral
                                            Botol | Buah/Puding
                                        </p>
                                    </div>
                                @elseif ($menu->jenis_paket == 'Nasi Nyunda')
                                    <div>
                                        <p class="text-gray-300">
                                            Nasi Timbel | Gepuk | Ayam Goreng/Bakar | Tumis
                                            Jamur | Asin Balado/Jambal | Lalab Sambal | Air
                                            Mineral Botol | Buah/Puding
                                        </p>
                                    </div>
                                @endif
                            </div>


                            <!-- Tombol Pesan -->
                            <button
                                class="flex items-center justify-center w-full gap-2 py-3 mt-6 font-semibold text-white rounded-lg bg-emerald-600 hover:bg-emerald-700">
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
