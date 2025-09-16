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

    <div class="text-white py-16 px-[2cm]">
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
                <h2 class="text-3xl font-bold mt-2 mb-4 leading-snug">
                    Sajian Tumpeng Autentik Rasa <br class="hidden md:block" /> Nusantara
                </h2>

                <h3 class="text-lg font-semibold mb-3">Visi kami</h3>

                <p class="text-gray-300 leading-relaxed mb-6">
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



    {{-- <div class="text-white py-16 px-[2cm]">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
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
                <h2 class="text-3xl font-bold mt-2 mb-4 leading-snug">
                    Sajian Tumpeng Autentik Rasa <br class="hidden md:block" /> Nusantara
                </h2>

                <h3 class="text-lg font-semibold mb-3">Visi kami</h3>

                <p class="text-gray-300 leading-relaxed mb-6">
                    Visi kami adalah menyajikan hidangan yang berkualitas dengan pelayanan yang ramah
                    dan bersahabat, sehingga setiap pelanggan dapat merasakan pengalaman kuliner yang berkesan.
                </p>

                <a href="#"
                    class="inline-block bg-white text-black font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-200 transition">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div> --}}

    <div class="py-10 px-[2cm] text-white">
        <h2 class="text-center text-2xl font-bold mb-12">
            Yang Membuat Kami Istimewa
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white text-black rounded-xl shadow-lg p-6">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Sudah Bersertifikasi Halal</h3>
                <p class="text-gray-600">
                    Sajian yang kami hadirkan tidak hanya lezat dan berkualitas,
                    tetapi juga terjamin kehalalannya.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white text-black rounded-xl shadow-lg p-6">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Bahan Pilihan Berkualitas</h3>
                <p class="text-gray-600">
                    Kami hanya menggunakan beras terbaik, bumbu segar,
                    dan lauk pilihan agar cita rasa tumpeng selalu istimewa.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white text-black rounded-xl shadow-lg p-6">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Tampilan Estetis dan Rapi</h3>
                <p class="text-gray-600">
                    Disusun dengan penuh ketelitian sehingga tumpeng tidak hanya lezat,
                    tetapi juga indah dipandang dalam setiap acara.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white text-black rounded-xl shadow-lg p-6">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 1.343-3 3 0 1.306.835 2.417 2 2.829V18h2v-4.171c1.165-.412 2-1.523 2-2.829 0-1.657-1.343-3-3-3z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Penuh Makna dan Kebersamaan</h3>
                <p class="text-gray-600">
                    Tumpeng kami menghadirkan filosofi syukur serta kebersamaan,
                    menjadikan momen Anda lebih berkesan dan bermakna.
                </p>
            </div>
        </div>
        <div class="py-10 px-[2cm] text-white max-w-7xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Rayakan Momen Spesialmu dengan Tumpeng Bandung 1970
            </h2>
            <p class="text-gray-300 text-lg md:text-xl">
                Nikmati cita rasa autentik dengan pilihan paket lengkap untuk setiap perayaan
            </p>
        </div>

        <!-- Tambahin px-[2cm] di grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 mx-auto ">

            <!-- Tumpeng Premium -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/tumpeng-premium.jpg" alt="Tumpeng Premium" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Tumpeng Premium</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Tumpeng Tampah -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/tumpeng-tampah.jpg" alt="Tumpeng Tampah" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Tumpeng Tampah</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Tumpeng Mini -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/tumpeng-mini.jpg" alt="Tumpeng Mini" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Tumpeng Mini</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Nasi Tumpeng Box -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/nasi-tumpeng-box.jpg" alt="Nasi Tumpeng Box" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Nasi Tumpeng Box</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Nasi Box -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/nasi-box.jpg" alt="Nasi Box" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Nasi Box</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Liwet Kastrol -->
            <div
                class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="/path/to/liwet-kastrol.jpg" alt="Liwet Kastrol" class="w-full h-48 object-cover">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-xl mb-2">Liwet Kastrol</h3>
                    <a href="#" class="text-indigo-400 hover:underline">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>



@endsection
