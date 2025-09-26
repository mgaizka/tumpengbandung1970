@extends('Layout.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="text-white px-4 md:px-[1cm] lg:px-[2cm] pt-[120px]">
        <h2 class="text-[32px] font-bold mb-4 text-center">
            Suara Pelanggan, Bukti Kualitas Kami <br>
            <span class="text-white-300">Untuk Setiap Momen Spesial Anda</span>
        </h2>

        <div x-data="{ open: false }" class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-between py-8">

            @foreach ($events as $event)
                <div class="bg-white rounded-xl shadow-md overflow-hidden w-full h-[440px] flex flex-col">
                    <img src="{{ asset('storage/' . $event->image) }}" alt="Kopassus" class="w-full h-2/3 object-cover">
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class=" text-black text-lg font-bold">{{ $event->judul }}</h3>
                            <p class="text-gray-600">{{ $event->sub_judul }}</p>
                        </div>
                        <button @click="open = true"
                            class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg">
                            Lihat Detail
                        </button>
                    </div>

                    <!-- Modal -->
                    <div x-show="open" x-transition
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm"
                        style="display: none">
                        <div
                            class="bg-black text-white w-full max-w-3xl rounded-xl shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-2xl font-bold">
                                ✕
                            </button>

                            <!-- Judul & Subjudul -->
                            <h2 class="text-center text-xl font-bold mb-1">{{ $event->judul }}</h2>
                            <p class="text-center text-white mb-4">
                                {{ $event->sub_judul }}
                            </p>

                            <!-- Gambar 2 kolom -->
                            <div class="mb-6 grid gap-3 {{ $event->image_alt ? 'grid-cols-2' : 'grid-cols-1' }}">
                                <img src="{{ asset('storage/' . $event->image) }}"
                                    class="rounded-lg object-cover w-full h-40 {{ $event->image_alt ? '' : 'col-span-1' }}"
                                    alt="paket">

                                @if ($event->image_alt)
                                    <img src="{{ asset('storage/' . $event->image_alt) }}"
                                        class="rounded-lg object-cover w-full h-40" alt="paket">
                                @endif
                            </div>

                            <!-- Isi Deskripsi -->
                            <div class="space-y-4 text-justify leading-relaxed text-sm sm:text-base">
                                {{ $event->desc }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
