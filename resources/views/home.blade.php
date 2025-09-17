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
                    <div class="bg-[#eedc95] text-black rounded-xl shadow-lg p-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mb-4">

        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
            <path fill="#000000"
                d="M13.731 3.25a2.09 2.09 0 0 0-1.982 1.464l-.802 2.491a2 2 0 0 1-.442.76a9.5 9.5 0 0 0-1.528 2.218h-.652a2.25 2.25 0 0 0-1.243-.856c-.289-.078-.617-.077-.998-.077h-.168c-.38 0-.71 0-.998.077a2.25 2.25 0 0 0-1.591 1.59c-.078.29-.077.618-.077 1v6.167c0 .38 0 .71.077.998a2.25 2.25 0 0 0 1.59 1.591c.29.078.618.078 1 .077h.167c.38 0 .71 0 .998-.077a2.25 2.25 0 0 0 1.289-.923H15c1.341 0 2.256-.058 2.984-.367a3.87 3.87 0 0 0 1.58-1.24c.465-.618.68-1.426.999-2.622l.04-.148l.691-2.367l.01-.03c.16-.534.293-.98.37-1.35c.078-.379.116-.764.015-1.15a2.35 2.35 0 0 0-.992-1.382c-.339-.219-.717-.296-1.098-.331c-.367-.034-.823-.034-1.364-.034h-2.302c.533-1.695.358-3.066.07-3.977c-.333-1.058-1.342-1.502-2.221-1.502zm-4.98 15v-6.334l-.001-.233h1.182l.294-.636a8 8 0 0 1 1.38-2.064c.35-.377.611-.828.77-1.319l.8-2.49a.59.59 0 0 1 .555-.424h.051c.45 0 .714.21.791.454c.246.779.424 2.15-.416 3.959a.75.75 0 0 0 .68 1.066h3.364c.584 0 .97 0 1.26.027c.285.027.38.072.421.098c.171.11.3.287.356.5c.015.058.027.177-.034.47c-.06.296-.175.68-.347 1.254l-.002.005l-.698 2.386l-.002.008c-.377 1.413-.523 1.91-.79 2.265a2.37 2.37 0 0 1-.967.76c-.409.173-1.026.248-2.398.248zm-3.445-7.475c.071-.019.18-.025.694-.025c.513 0 .623.006.694.025a.75.75 0 0 1 .53.53c.02.072.026.182.026.695v6c0 .513-.006.623-.025.694a.75.75 0 0 1-.53.53c-.072.02-.182.026-.695.026s-.623-.006-.694-.026a.75.75 0 0 1-.53-.53c-.02-.071-.026-.18-.026-.694v-6c0-.513.007-.623.026-.694a.75.75 0 0 1 .53-.53" />
        </svg>


                        </div>
                        <h3 class="text-lg font-semibold mb-2">Sudah Bersertifikasi Halal</h3>
                        <p class="text-gray-600">
                            Sajian yang kami hadirkan tidak hanya lezat dan berkualitas,
                            tetapi juga terjamin kehalalannya.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#eedc95] text-black rounded-xl shadow-lg p-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mb-4">

                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="#000000">
                                <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M5 21c.5-4.5 2.5-8 7-10" />
                                    <path d="M9 18c6.218 0 10.5-3.288 11-12V4h-4.014c-9 0-11.986 4-12 9c0 1 0 3 2 5h3z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Bahan Pilihan Berkualitas</h3>
                        <p class="text-gray-600">
                            Kami hanya menggunakan beras terbaik, bumbu segar,
                            dan lauk pilihan agar cita rasa tumpeng selalu istimewa.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#eedc95] text-black rounded-xl shadow-lg p-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 32 32" fill="#000000">
                                <g fill="#000000">
                                    <path
                                        d="M6.82 20.575v3.834A12.475 12.475 0 0 0 16.5 29c4.324 0 8.136-2.196 10.38-5.533v-5.374C26.112 23.136 21.757 27 16.5 27c-4.354 0-8.089-2.65-9.68-6.425Zm18.21-10.199V8.654a3.32 3.32 0 0 1 .184-1.116A12.459 12.459 0 0 0 16.5 4a12.45 12.45 0 0 0-7.976 2.875l.005.061l.001.027v2.7A10.476 10.476 0 0 1 16.5 6c3.514 0 6.624 1.726 8.53 4.376Z" />
                                    <path
                                        d="M24.5 16.5a8 8 0 1 1-16 0a8 8 0 0 1 16 0Zm-8 7a7 7 0 1 0 0-14a7 7 0 0 0 0 14ZM29.99 7.94c0-.9-.73-1.63-1.63-1.63c-1.3 0-2.34 1.05-2.33 2.34v5.55c0 1.253.726 2.375 1.85 2.883V25.7c0 .52.42.94.94.94h.23c.52 0 .94-.42.94-.94V7.94ZM6.82 6.31a.68.68 0 0 0-.68.68v2.69c0 .2-.16.35-.35.35c-.2 0-.35-.16-.35-.35V7.02c0-.37-.29-.7-.66-.71c-.39-.01-.71.3-.71.68v2.69c0 .2-.16.35-.35.35c-.2 0-.35-.16-.35-.35V7.02c0-.37-.29-.7-.66-.71c-.39-.01-.71.3-.71.68v4.58c0 .902.437 1.707 1.109 2.209c.601.339.601 1.891.601 1.891v10.02c0 .52.42.94.94.94h.23c.52 0 .94-.42.94-.94V15.67s0-1.491.601-1.891A2.757 2.757 0 0 0 7.53 11.57V6.99a.72.72 0 0 0-.71-.68Z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Tampilan Estetis dan Rapi</h3>
                        <p class="text-gray-600">
                            Disusun dengan penuh ketelitian sehingga tumpeng tidak hanya lezat,
                            tetapi juga indah dipandang dalam setiap acara.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-[#eedc95] text-black rounded-xl shadow-lg p-6">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 1024 1024">
                            <path fill="#000000"
                                d="M746 835.28L544.529 723.678c74.88-58.912 95.216-174.688 95.216-239.601v-135.12c0-89.472-118.88-189.12-238.288-189.12c-119.376 0-241.408 99.664-241.408 189.12v135.12c0 59.024 24.975 178.433 100.624 239.089L54 835.278S0 859.342 0 889.342v81.088c0 29.84 24.223 54.064 54 54.064h692c29.807 0 54.031-24.224 54.031-54.064v-81.087c0-31.808-54.032-54.064-54.032-54.064zm-9.967 125.215H64.002V903.28c4.592-3.343 11.008-7.216 16.064-9.536c1.503-.688 3.007-1.408 4.431-2.224l206.688-112.096c18.848-10.224 31.344-29.184 33.248-50.528s-7.008-42.256-23.712-55.664c-53.664-43.024-76.656-138.32-76.656-189.152V348.96c0-45.968 86.656-125.12 177.408-125.12c92.432 0 174.288 78.065 174.288 125.12v135.12c0 50.128-15.568 145.84-70.784 189.28a64.098 64.098 0 0 0-24.224 55.664a64.104 64.104 0 0 0 33.12 50.849l201.472 111.6c1.777.975 4.033 2.031 5.905 2.848c4.72 2 10.527 5.343 14.783 8.288v57.887zM969.97 675.936L765.505 564.335c74.88-58.912 98.224-174.688 98.224-239.601v-135.12c0-89.472-121.872-190.128-241.28-190.128c-77.6 0-156.943 42.192-203.12 96.225c26.337 1.631 55.377 1.664 80.465 9.664c33.711-26.256 76.368-41.872 122.656-41.872c92.431 0 177.278 79.055 177.278 126.128v135.12c0 50.127-18.56 145.84-73.775 189.28a64.098 64.098 0 0 0-24.224 55.664a64.104 64.104 0 0 0 33.12 50.848l204.465 111.6c1.776.976 4.032 2.032 5.904 2.848c4.72 2 10.527 5.344 14.783 8.288v56.912H830.817c19.504 14.72 25.408 35.776 32.977 64h106.192c29.807 0 54.03-24.224 54.03-54.064V730.03c-.015-31.84-54.047-54.096-54.047-54.096z" />
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
