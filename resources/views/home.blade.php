@extends('Layout.app')

@section('title', 'Beranda')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Carousel -->
    <div id="default-carousel" class="relative w-full overflow-hidden shadow-b-md" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 sm:h-72 md:h-[500px] lg:h-screen">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/banner/1.webp') }}" class="absolute inset-0 object-cover w-full h-full"
                    alt="Foto 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/banner/2.webp') }}" class="absolute inset-0 object-cover w-full h-full"
                    alt="Foto 2">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/banner/3.webp') }}" class="absolute inset-0 object-cover w-full h-full"
                    alt="Foto 2">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/banner/4.webp') }}" class="absolute inset-0 object-cover w-full h-full"
                    alt="Foto 2">
            </div>
        </div>

        <!-- Tombol navigasi -->
        <button type="button"
            class="absolute z-30 flex items-center justify-center -translate-y-1/2 cursor-pointer top-1/2 left-4 group focus:outline-none"
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
            class="absolute z-30 flex items-center justify-center -translate-y-1/2 cursor-pointer top-1/2 right-4 group focus:outline-none"
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


    <!-- Tentang Kami -->
    <div class="text-white px-4 md:px-[1cm] lg:px-[2cm] mt-[80px]">
        <div class="grid items-center grid-cols-1 gap-2 lg:grid-cols-2">
            <!-- Grid Foto -->
            <div data-aos="fade-up" class="grid grid-cols-2 gap-8">
                <!-- Foto besar -->
                <div class="row-span-2">
                    <img src="{{ asset('asset/home/1.webp') }}" alt="Ruangan"
                        class="rounded-lg shadow-lg w-full h-[410px] object-cover">
                </div>
                <!-- Foto kecil atas -->
                <div>
                    <img src="{{ asset('asset/home/3.webp') }}" alt="Tumpeng"
                        class="rounded-lg shadow-lg w-[329px] h-[242px] object-cover">
                </div>
                <!-- Foto kecil bawah -->
                <div>
                    <img src="{{ asset('asset/home/2.webp') }}" alt="Nasi"
                        class="rounded-lg shadow-lg w-[329px] h-[140px] object-cover">
                </div>
            </div>

            <!-- Konten -->
            <div data-aos="fade-down">
                <p class="tracking-wider text-white uppercase text-md">Tentang Kami</p>
                <h2 class="text-[32px] font-bold mt-2 mb-4 leading-snug">
                    Sajian Tumpeng Autentik Rasa <br class="hidden md:block" /> Nusantara
                </h2>
                <h3 class="text-[24px] font-semibold mb-3">Visi Tumpeng Bandung 1970</h3>
                <p class="text-gray-300 leading-relaxed mb-6 text-[22px] text-justify">
                    Visi kami adalah menyajikan hidangan yang berkualitas dengan pelayanan yang ramah
                    dan bersahabat, sehingga setiap pelanggan dapat merasakan pengalaman kuliner yang berkesan.
                </p>
                <a href="{{ route('tentang-kami') }}" onclick="gtag('event', 'page_click', { page_name: 'Tentang Kami' });"
                    class="inline-block bg-white text-black font-semibold px-6 py-2 rounded-lg shadow hover:bg-gray-200 transition text-[20px]">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- Yang Membuat Kami Istimewa -->
    <div class="py-10 px-4 md:px-[1cm] lg:px-[2cm] md:px-16 mt-[60px]">
        <h2 class="text-[32px] sm:text-3xl font-bold mb-10 text-center text-white">
            Yang Membuat Kami Istimewa
        </h2>
        <div class="grid justify-center grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card -->
            <div data-aos="flip-up"
                class="bg-[#F4E1A6] w-full max-w-[400px] h-auto min-h-[280px] p-6 rounded-xl shadow-md flex flex-col items-start mx-auto">
                <div class="bg-white w-[47px] h-[47px] flex items-center justify-center rounded-lg shadow-md mb-4">
                    <img src="https://img.icons8.com/windows/32/thumb-up.png" alt="thumb-up" class="w-7 h-7" />
                </div>
                <h3 class="font-bold text-[20px] sm:text-[22px] mb-5">Sudah Bersertifikasi Halal</h3>
                <p class="text-[16px] sm:text-[18px]">
                    Sajian yang kami hadirkan tidak hanya lezat dan berkualitas, tetapi juga terjamin kehalalannya.
                </p>
            </div>

            <!-- Card 2 -->
            <div data-aos="flip-up"
                class="bg-[#F4E1A6] w-full max-w-[400px] h-auto min-h-[280px] p-6 rounded-xl shadow-md flex flex-col items-start mx-auto">
                <div class="bg-white w-[47px] h-[47px] flex items-center justify-center rounded-lg shadow-md mb-4">
                    <img src="https://img.icons8.com/ios/50/natural-food.png" alt="leaf" class="w-7 h-7" />
                </div>
                <h3 class="font-bold text-[20px] sm:text-[22px] mb-5">Bahan Pilihan Berkualitas</h3>
                <p class="text-[16px] sm:text-[18px]">
                    Kami hanya menggunakan beras terbaik, bumbu segar, dan lauk pilihan agar cita rasa tumpeng selalu
                    istimewa.
                </p>
            </div>

            <!-- Card 3 -->
            <div data-aos="flip-up"
                class="bg-[#F4E1A6] w-full max-w-[400px] h-auto min-h-[280px] p-6 rounded-xl shadow-md flex flex-col items-start mx-auto">
                <div class="bg-white w-[47px] h-[47px] flex items-center justify-center rounded-lg shadow-md mb-4">
                    <img src="https://img.icons8.com/wired/64/meal.png" alt="meal" class="w-8 h-8" />
                </div>
                <h3 class="font-bold text-[20px] sm:text-[22px] mb-5">Tampilan Estetis dan Rapi</h3>
                <p class="text-[16px] sm:text-[18px]">
                    Disusun dengan penuh ketelitian sehingga tumpeng tidak hanya lezat, tetapi juga indah dipandang
                    dalam
                    setiap acara.
                </p>
            </div>

            <!-- Card 4 -->
            <div data-aos="flip-up"
                class="bg-[#F4E1A6] w-full max-w-[400px] h-auto min-h-[280px] p-6 rounded-xl shadow-md flex flex-col items-start mx-auto">
                <div class="bg-white w-[47px] h-[47px] flex items-center justify-center rounded-lg shadow-md mb-4">
                    <img src="https://img.icons8.com/ios/50/queue.png" alt="queue" class="w-7 h-7" />
                </div>
                <h3 class="font-bold text-[20px] sm:text-[22px] mb-5">Penuh Makna dan Kebersamaan</h3>
                <p class="text-[16px] sm:text-[18px]">
                    Tumpeng kami menghadirkan filosofi syukur serta kebersamaan, menjadikan momen lebih berkesan dan
                    bermakna.
                </p>
            </div>
        </div>
    </div>

    <!-- Rayakan Momen -->
    <div class="py-14 px-4 md:px-[1cm] lg:px-[2cm] text-white">
        <h2 class="text-center text-[32px] font-bold mb-4">
            Rayakan Momen Spesialmu dengan Tumpeng Bandung 1970
        </h2>
        <p class="text-center text-[24px] mb-10">
            Nikmati cita rasa autentik dengan pilihan paket lengkap untuk setiap perayaan
        </p>

        <!-- Grid Card Produk -->
        <div class="grid gap-8 mx-auto sm:grid-cols-2 lg:grid-cols-3">

            @php
                $produk = [
                    [
                        'img' => 'asset/menupict/tumpengpict/tumpeng-premium-1.webp',
                        'alt' => 'Tumpeng Premium',
                        'title' => 'Tumpeng Premium',
                        'pos' => 'object-[center_42%]',
                        'link' => route('menu-tumpeng', ['kategori' => 'premium']),
                    ],
                    [
                        'img' => 'asset/menupict/tumpengpict/tumpeng-tampah-paket-b.webp',
                        'alt' => 'Tumpeng Tampah',
                        'title' => 'Tumpeng Tampah',
                        'pos' => 'object-center',
                        'link' => route('menu-tumpeng', ['kategori' => 'tampah']),
                    ],
                    [
                        'img' => 'asset/menupict/tumpengpict/tumpeng-mini-1.webp',
                        'alt' => 'Tumpeng Mini',
                        'title' => 'Tumpeng Mini',
                        'pos' => 'object-[center_66%]',
                        'link' => route('menu-tumpeng', ['kategori' => 'mini']),
                    ],
                    [
                        'img' => 'asset/menupict/tumpengpict/tumpeng-box-1.webp',
                        'alt' => 'Nasi Tumpeng Box',
                        'title' => 'Nasi Tumpeng Box',
                        'pos' => 'object-[center_60%]',
                        'link' => route('menu-tumpeng', ['kategori' => 'nasi-box']),
                    ],
                    [
                        'img' => 'asset/menupict/nasipict/nasi-box-2.webp',
                        'alt' => 'Nasi Box',
                        'title' => 'Nasi Box',
                        'pos' => 'object-center',
                        'link' => route('menu-nasi', ['kategori' => 'paket-nasi-box']),
                    ],
                    [
                        'img' => 'asset/menupict/lainnyapict/liwet-kastrol-1.webp',
                        'alt' => 'Liwet Kastrol',
                        'title' => 'Liwet Kastrol',
                        'pos' => 'object-[center_74%]',
                        'link' => route('menu-lainnya', ['kategori' => 'liwet-kastrol']),
                    ],
                ];
            @endphp

            @foreach ($produk as $item)
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl">
                    <img loading="lazy" src="{{ asset($item['img']) }}" alt="{{ $item['alt'] }}"
                        class="w-full h-70 object-cover {{ $item['pos'] }} transition-transform duration-300 hover:scale-105">

                    <div class="p-4 mb-8 text-center">
                        <h3 class="mb-2 text-2xl font-semibold">{{ $item['title'] }}</h3>
                        <a href="{{ $item['link'] }}" class="text-xl text-white hover:underline"
                            onclick="gtag('event', 'select_menu', { menu_name: '{{ $item['title'] }}' });">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Testimoni -->
    <div class="bg-gray-200/10 py-14 pb-10 px-4 md:px-[1cm] lg:px-[2cm] text-center ">
        <!-- Judul -->
        <h2 class="text-[32px] md:text-3xl font-bold mb-10 text-white">
            Apa Kata Mereka Tentang Tumpeng Bandung 1970
        </h2>
        <!-- Grid Testimoni -->
        <div data-aos="flip-up" class="grid grid-cols-1 gap-6 mb-10 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="p-6 text-gray-900 bg-white rounded-lg shadow-md">
                <div class="flex items-center mb-3">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-gray-100 rounded-full">
                        <img src="https://img.icons8.com/ios-filled/50/pigtails-haircut.png" alt="pigtails-haircut"
                            alt="queue" class="w-7 h-7" />
                    </div>
                    <h3 class="text-lg font-semibold">Ibu Rina</h3>
                </div>
                <p class="text-sm leading-relaxed text-justify">
                    Tumpeng Premium dari Tumpeng Bandung benar-benar luar biasa.
                    Tampilan dekorasinya elegan dan rasanya enak sekali.
                    Tamu undangan di acara syukuran kami sangat puas.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="p-6 text-gray-900 bg-white rounded-lg shadow-md">
                <div class="flex items-center mb-3">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-gray-100 rounded-full">
                        <img src="https://img.icons8.com/ios-filled/50/user-male--v1.png" alt="user-male--v1"
                            class="w-7 h-7" />
                    </div>
                    <h3 class="text-lg font-semibold">Bapak Arif</h3>
                </div>
                <p class="text-sm leading-relaxed text-justify">
                    Kami pesan Tumpeng Tampah untuk arisan keluarga,
                    hasilnya sangat memuaskan. Sajian lengkap, porsinya cukup,
                    dan tampilannya cantik.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="p-6 text-gray-900 bg-white rounded-lg shadow-md">
                <div class="flex items-center mb-3">
                    <div class="flex items-center justify-center w-10 h-10 mr-3 bg-gray-100 rounded-full">
                        <img src="https://img.icons8.com/ios-filled/50/pigtails-haircut.png" alt="pigtails-haircut"
                            alt="queue" class="w-7 h-7" />
                    </div>
                    <h3 class="text-lg font-semibold">Mbak Sari</h3>
                </div>
                <p class="text-sm leading-relaxed text-justify">
                    Nasi Box dari Tumpeng Bandung selalu jadi pilihan di kantor kami.
                    Rasanya enak, isinya pas, dan pengirimannya selalu tepat waktu.
                </p>
            </div>
        </div>
        <!-- Tombol -->
        <a href="{{ route('testimoni') }}" onclick="gtag('event', 'page_click', { page_name: 'Testimoni' });"
            class="inline-block px-5 py-2 text-white transition bg-transparent border border-white rounded-md hover:bg-white hover:text-gray-900">
            Lihat Testimoni
        </a>
    </div>

    <!-- Logo -->
    <div class="py-14 pb-[50px] px-4 md:px-[1cm] lg:px-[2cm] text-center mt-[60px]">
        <h2 class="mb-10 text-2xl font-bold text-white md:text-3xl">
            Mereka yang Pernah Bekerja Sama dengan Kami
        </h2>

        <!-- Grid Logo -->
        <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4">
            @php
                $partners = [
                    ['img' => '1.webp', 'alt' => 'BSI'],
                    ['img' => '2.webp', 'alt' => 'BRI'],
                    ['img' => '3.webp', 'alt' => 'Bank BJB'],
                    ['img' => '4.webp', 'alt' => 'KAI'],
                    ['img' => '5.webp', 'alt' => 'Pegadaian'],
                    ['img' => '6.webp', 'alt' => 'RSHS'],
                    ['img' => '7.webp', 'alt' => 'Mahkamah Agung'],
                    ['img' => '8.webp', 'alt' => 'Kejaksaan'],
                    ['img' => '9.webp', 'alt' => 'Korps Brimob'],
                    ['img' => '10.webp', 'alt' => 'TNI'],
                    ['img' => '11.webp', 'alt' => 'UNPAD'],
                    ['img' => '12.webp', 'alt' => 'UI'],
                ];
            @endphp

            @foreach ($partners as $partner)
                <div data-aos="zoom-in"
                    class="flex items-center justify-center p-4 overflow-hidden transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                    <img loading="lazy" src="{{ asset('asset/home/perusahaan/' . $partner['img']) }}"
                        alt="{{ $partner['alt'] }}" class="max-w-[300px] max-h-[166px] object-contain">
                </div>
            @endforeach
        </div>
    </div>


    <!-- Maps -->
    <div class="px-4 md:px-[1cm] lg:px-[2cm] pt-[30px] py-10 mt-[60px]">
        <div class="w-full h-[300px] md:h-[490px] rounded-lg overflow-hidden shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.860730357939!2d107.61842537592155!3d-6.907251967601307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73f2dc2d82d%3A0x5471b93bd20ac149!2sTumpeng%20Bandung%201970!5e0!3m2!1sid!2sid!4v1758100843739!5m2!1sid!2sid"
                class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                onclick="gtag('event', 'address_click', { address: '' });" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Floating Halal -->
    <div class="fixed bottom-24 right-4 group">
        <a href="{{ asset('Sertif Halal.webp') }}" target="_blank"
            class="relative flex items-center justify-center transition rounded-full shadow-lg w-14 h-14 backdrop-blur-sm hover:scale-110">
            <img src="{{ asset('halallogo.png') }}" alt="Halal Logo" class="object-contain w-14 h-14">
        </a>
        <!-- Tooltip -->
        <span
            class="absolute px-2 py-1 text-xs text-white transition -translate-y-1/2 bg-black rounded opacity-0 right-20 top-1/2 group-hover:opacity-100">
            Halal Certified
        </span>
    </div>

    <!-- Floating WhatsApp -->
    <div class="fixed bottom-5 right-4 group">
        <a href="https://wa.me/+628112202117" target="_blank"
            onclick="gtag('event', 'direct_whatsapp', {location: 'Floating Icon', page_title: document.title});"
            class="relative flex items-center justify-center transition rounded-full shadow-lg w-13 h-13 bg-green-500/90 backdrop-blur-sm hover:bg-green-600/90 hover:scale-110">
            <i class="text-3xl text-white fab fa-whatsapp"></i>
            <!-- Tooltip -->
            <span
                class="absolute px-2 py-1 text-xs text-white transition -translate-y-1/2 bg-black rounded opacity-0 right-20 top-1/2 group-hover:opacity-100">
                Pesan Sekarang!
            </span>
        </a>
    </div>
@endsection
