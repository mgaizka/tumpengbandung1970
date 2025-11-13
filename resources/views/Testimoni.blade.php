@extends('Layout.app')

@section('title', 'Testimoni')

@section('content')
    <div class="text-white px-4 pt-[40px] lg:px-[2cm] lg:pt-[90px]" x-data="{ open: false, selectedEvent: null }">
        <h2 class="text-2xl font-bold mb-3 text-center text-gray-100 lg:text-3xl">
            Suara Pelanggan, Bukti Kualitas Kami <br>
            <span class="text-gray-200">Untuk Setiap Momen Spesial Anda</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-between py-8">
            @foreach ($events as $event)
                <div class="bg-white rounded-xl shadow-md overflow-hidden w-full h-[440px] flex flex-col menu-card"
                    data-judul="{{ $event->judul }}">
                    <img src="{{ asset($event->image) }}" alt="img" class="w-full h-2/3 object-cover">
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-black text-lg font-bold">{{ $event->judul }}</h3>
                            <p class="text-gray-600">{{ $event->sub_judul }}</p>
                        </div>
                        <button @click="open = true; selectedEvent = {{ $event->toJson() }}"
                            onclick="gtag('event', 'select_testimoni', { testimoni_name: '{{ $event->sub_judul }}' });"
                            class="py-2 text-start text-black text-md hover:underline transition">
                            Selengkapnya &rarr;
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <div x-show="open" x-transition
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-3 sm:p-6 md:p-8 no-scrollbar"
            style="display: none">
            <div
                class="bg-[#111] text-white w-full max-w-4xl md:max-w-3xl sm:max-w-md rounded-2xl shadow-2xl p-6 md:p-8 relative overflow-y-auto max-h-[85vh] no-scrollbar transform -translate-y-6 sm:-translate-y-10">
                <button @click="open = false"
                    class="absolute top-3 right-3 text-gray-400 hover:text-white text-2xl font-bold">
                    ✕
                </button>

                <template x-if="selectedEvent">
                    <div>
                        <h2 class="text-center text-xl font-bold mb-1" x-text="selectedEvent.judul"></h2>
                        <p class="text-center text-white mb-4" x-text="selectedEvent.sub_judul"></p>

                        <div class="mb-6 grid gap-3" :class="selectedEvent.image_alt ? 'grid-cols-2' : 'grid-cols-1'">
                            <img :src="selectedEvent.image" class="rounded-lg object-cover w-full h-full" alt="paket">
                            <template x-if="selectedEvent.image_alt">
                                <img :src="selectedEvent.image_alt" class="rounded-lg object-cover w-full h-full"
                                    alt="paket">
                            </template>
                        </div>

                        <div class="space-y-4 text-justify leading-relaxed text-sm sm:text-base"
                            x-text="selectedEvent.desc"></div>
                    </div>
                </template>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuCards = document.querySelectorAll(".menu-card");

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const card = entry.target;
                        const judul = card.dataset.judul;

                        gtag('event', 'view_testimoni', {
                            testimoni_name: judul,
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
            /* IE dan Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection