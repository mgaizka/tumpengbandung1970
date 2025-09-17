@extends('Layout.app')

@section('title', 'Beranda')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 sm:h-72 md:h-[500px] lg:h-screen overflow-hidden">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('foto1.jpeg') }}" class="absolute block w-full h-full object-cover top-0 left-0"
                    alt="Foto 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('foto2.jpeg') }}" class="absolute block w-full h-full object-cover top-0 left-0"
                    alt="Foto 2">
            </div>
        </div>

        <!-- Tombol navigasi -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 focus:ring-4 focus:ring-white">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="text-white pt-32 pb-25 px-[2cm]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Grid Foto -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Foto besar -->
                <div class="row-span-2">
                    <img src="{{ asset('foto1.jpeg') }}" alt="Ruangan"
                        class="rounded-lg shadow-lg w-full h-full object-cover">
                </div>
                <!-- Foto kecil atas -->
                <div>
                    <img src="{{ asset('foto2.jpeg') }}" alt="Tumpeng"
                        class="rounded-lg shadow-lg w-full h-40 object-cover">
                </div>
                <!-- Foto kecil bawah -->
                <div>
                    <img src="{{ asset('foto1.jpeg') }}" alt="Nasi"
                        class="rounded-lg shadow-lg w-full h-40 object-cover">
                </div>
            </div>

            <!-- Konten -->
            <div>
                <p class="text-sm tracking-wider uppercase text-white">Tentang Kami</p>
                <h2 class="text-4xl font-bold mt-2 mb-4 leading-snug">
                    Sajian Tumpeng Autentik Rasa <br class="hidden md:block" /> Nusantara
                </h2>

                <h3 class="text-2xl font-semibold mb-3">Visi Tumpeng Bandung 1970</h3>

                <p class="text-gray-300 leading-relaxed mb-6 text-xl">
                    Visi kami adalah menyajikan hidangan yang berkualitas dengan pelayanan yang ramah
                    dan bersahabat, sehingga setiap pelanggan dapat merasakan pengalaman kuliner yang berkesan.
                </p>

                <a href="#"
                    class="inline-block bg-white text-black font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-200 transition">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <div class="py-10 px-[2cm] text-white">

        <h2 class="text-center text-4xl font-bold mb-12">
            Yang Membuat Kami Istimewa
        </h2>

        <!-- Grid Card Produk -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mx-auto">

            <!-- Tumpeng Premium -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Tumpeng Premium" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Tumpeng Premium</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Tumpeng Tampah -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Tumpeng Tampah" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Tumpeng Tampah</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Tumpeng Mini -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Tumpeng Mini" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Tumpeng Mini</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Nasi Tumpeng Box -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Nasi Tumpeng Box" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Nasi Tumpeng Box</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Nasi Box -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Nasi Box" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Nasi Box</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Liwet Kastrol -->
            <div class="rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="{{ asset('foto1.jpeg') }}" alt="Liwet Kastrol" class="w-full h-56 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-2xl mb-2">Liwet Kastrol</h3>
                    <a href="#" class="text-white text-xl hover:underline">Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>


    <div class="bg-gray-200/10 pt-15 pb-10 mt-[100px]">
        <div class="px-[2cm] text-center">
            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold mb-10 text-white">
                Apa Kata Mereka Tentang Tumpeng Bandung 1970
            </h2>

            <!-- Grid Testimoni -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

                <!-- Card 1 -->
                <div class="bg-white text-gray-900 rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 mr-3">
                            <span class="text-xl">😊</span>
                        </div>
                        <h3 class="font-semibold text-lg">Ibu Rina</h3>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Tumpeng Premium dari Tumpeng Bandung benar-benar luar biasa.
                        Tampilan dekorasinya elegan dan rasanya enak sekali.
                        Tamu undangan di acara syukuran kami sangat puas.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white text-gray-900 rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 mr-3">
                            <span class="text-xl">😊</span>
                        </div>
                        <h3 class="font-semibold text-lg">Bapak Arif</h3>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Kami pesan Tumpeng Tampah untuk arisan keluarga,
                        hasilnya sangat memuaskan. Sajian lengkap, porsinya cukup,
                        dan tampilannya cantik.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white text-gray-900 rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 mr-3">
                            <span class="text-xl">😊</span>
                        </div>
                        <h3 class="font-semibold text-lg">Mbak Sari</h3>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Nasi Box dari Tumpeng Bandung selalu jadi pilihan di kantor kami.
                        Rasanya enak, isinya pas, dan pengirimannya selalu tepat waktu.
                    </p>
                </div>
            </div>

            <!-- Tombol -->
            <a href="/testimoni"
                class="inline-block bg-transparent border border-white text-white px-5 py-2 rounded-md hover:bg-white hover:text-gray-900 transition">
                Lihat Testimoni
            </a>
        </div>
    </div>

    <div class="pt-[99px] pb-[70px] px-[2cm] text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-10 text-white">
            Mereka yang Pernah Bekerja Sama dengan Kami
        </h2>

        <!-- Grid Logo -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">

            <!-- Card Logo -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="BSI" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="BRI" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="Bank BJB" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="KAI" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="Pegadaian" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="RSHS" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="Mahkamah Agung" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="Kejaksaan" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="Korps Brimob" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="TNI" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto1.jpeg') }}" alt="UNPAD" class="w-full h-full object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('foto2.jpeg') }}" alt="UI" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <div class="px-[2cm]">
        <div class="w-full h-[300px] md:h-[490px] rounded-lg overflow-hidden shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.860730357939!2d107.61842537592155!3d-6.907251967601307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73f2dc2d82d%3A0x5471b93bd20ac149!2sTumpeng%20Bandung%201970!5e0!3m2!1sid!2sid!4v1758100843739!5m2!1sid!2sid"
                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>



@endsection
