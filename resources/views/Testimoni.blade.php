@extends('Layout.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="text-white px-4 md:px-[1cm] lg:px-[2cm] pt-[120px] mb-[1.5cm]" x-data="{ open: false, selectedEvent: null }">
        <h2 class="text-[32px] font-bold mb-4 text-center">
            Suara Pelanggan, Bukti Kualitas Kami <br>
            <span class="text-white-300">Untuk Setiap Momen Spesial Anda</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-between py-8">
            @foreach ($events as $event)
                <div class="bg-white rounded-xl shadow-md overflow-hidden w-full h-[440px] flex flex-col ">
                    <img src="{{ asset('storage/' . $event->image) }}" alt="Kopassus" class="w-full h-2/3 object-cover">
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-black text-lg font-bold">{{ $event->judul }}</h3>
                            <p class="text-gray-600">{{ $event->sub_judul }}</p>
                        </div>
                        <button @click="open = true; selectedEvent = {{ $event->toJson() }}"
                            class="py-2 text-start text-black text-md hover:underline transition">
                            Selengkapnya &rarr;
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- ✅ Modal DI LUAR LOOP -->
        <div x-show="open" x-transition
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm" style="display: none">
            <div
                class="bg-black text-white w-full max-w-3xl rounded-xl shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">
                <button @click="open = false"
                    class="absolute top-3 right-3 text-gray-400 hover:text-white text-2xl font-bold">
                    ✕
                </button>

                <template x-if="selectedEvent">
                    <div>
                        <h2 class="text-center text-xl font-bold mb-1" x-text="selectedEvent.judul"></h2>
                        <p class="text-center text-white mb-4" x-text="selectedEvent.sub_judul"></p>

                        <div class="mb-6 grid gap-3" :class="selectedEvent.image_alt ? 'grid-cols-2' : 'grid-cols-1'">
                            <img :src="'/storage/' + selectedEvent.image" class="rounded-lg object-cover w-full h-40"
                                alt="paket">
                            <template x-if="selectedEvent.image_alt">
                                <img :src="'/storage/' + selectedEvent.image_alt"
                                    class="rounded-lg object-cover w-full h-40" alt="paket">
                            </template>
                        </div>

                        <div class="space-y-4 text-justify leading-relaxed text-sm sm:text-base"
                            x-text="selectedEvent.desc"></div>
                    </div>
                </template>
            </div>
        </div>
    </div>
@endsection