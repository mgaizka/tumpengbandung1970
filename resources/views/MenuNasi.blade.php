@extends('Layout.app')

@section('title', 'Tumpeng')

@section('content')
    <div class="text-white px-4 px-4 md:px-[1cm] lg:px-[2cm] pt-[140px]">
        <!-- Tag kecil di atas -->
        <span class="block mx-auto text-xl sm:text-3xl md:text-4xl font-bold mb-4 text-center">
            PAKET NASI
        </span>

        <!-- Judul -->
        <h2 class="text-xl sm:text-3xl md:text-4xl font-bold mb-4 text-center">
            Rayakan Momen Istimewa Dengan <br>
            <span class="text-white-300">Tumpeng Bandung 1970</span>
        </h2>

        <!-- Tab / Filter Kategori -->
        <div class="flex flex-wrap justify-center gap-4 mt-8 mb-[120px]">
            <button class="px-5 py-2 rounded-full bg-white text-black font-semibold hover:bg-slate-200 transition">
                Nasi Bakar
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Nasi Besek
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Tumpeng Tampah
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Nasi Box
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Premuim Lunch Box
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Nasi Bento
            </button>
            <button
                class="px-5 py-2 rounded-full border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                Ricebowl
            </button>
        </div>

        <!-- Grid produk -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mb-[100px]">

            <!-- Contoh Kartu Produk -->
            <div x-data="{ open: false }" class="relative">
                <!-- Kartu Produk -->
                <div class="bg-white rounded-xl overflow-hidden shadow">
                    <img src="{{ asset('foto1.jpeg') }}" alt="Paket A" class="w-full h-56 object-cover">
                    <div class="p-4 text-black">
                        <h3 class="text-xl font-bold mb-1">Paket A</h3>
                        <p class="mb-3 text-sm">1 Menu Utama Ayam dengan 4 Lauk Tambahan</p>
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
                <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/70"
                    style="display:none">
                    <div class="bg-[#111] text-white w-full max-w-lg rounded-xl shadow-lg p-6 relative">
                        <!-- Tombol Close -->
                        <button @click="open = false"
                            class="absolute top-3 right-3 text-gray-300 hover:text-white text-2xl font-bold">
                            ✕
                        </button>

                        <!-- Judul dan Subjudul -->
                        <h2 class="text-lg font-bold text-center mb-1">
                            Nasi Tumpeng Box Paket A – Rp 38.000
                        </h2>
                        <p class="text-center text-sm mb-4">
                            1 Menu Utama Ayam dan 4 Lauk Tambahan
                        </p>

                        <!-- Gambar 2 kolom -->
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <img src="{{ asset('foto1.jpeg') }}" class="rounded-lg object-cover w-full h-32" alt="paket">
                            <img src="{{ asset('foto2.jpeg') }}" class="rounded-lg object-cover w-full h-32" alt="paket">
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Contoh Kartu Produk -->
            <div class="bg-white rounded-xl overflow-hidden shadow hover:scale-105 transition">
                <img src="{{ asset('foto1.jpeg') }}" alt="Paket A" class="w-full h-56 object-cover">
                <div class="p-4 text-black">
                    <h3 class="text-xl font-bold mb-1">Paket A</h3>
                    <p class="mb-3 text-sm">1 Menu Utama Ayam dengan 4 Lauk Tambahan</p>
                    <a href="#" class="font-semibold inline-flex items-center hover:underline">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Contoh Kartu Produk -->
            <div class="bg-white rounded-xl overflow-hidden shadow hover:scale-105 transition">
                <img src="{{ asset('foto1.jpeg') }}" alt="Paket A" class="w-full h-56 object-cover">
                <div class="p-4 text-black">
                    <h3 class="text-xl font-bold mb-1">Paket A</h3>
                    <p class="mb-3 text-sm">1 Menu Utama Ayam dengan 4 Lauk Tambahan</p>
                    <a href="#" class="font-semibold inline-flex items-center hover:underline">
                        Selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
