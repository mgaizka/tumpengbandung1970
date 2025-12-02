<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Company Profile')</title>

    <link rel="icon" type="image/webp" href="{{ asset('logobaru.webp') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preload" as="image" href="{{ asset('asset\main\main-bg.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q2LBQZBZ8R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-45BYG8Y26L');
    </script>
    <!-- Event snippet for Page view conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-17718411985/iqWnCK724L0bENGF5oBC',
            'value': 1.0,
            'currency': 'IDR'
        });
    </script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17718411985"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17718411985"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-17718411985');
    </script>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- === Vite Production / Fallback Handling === --}}
    @if (file_exists(public_path('build/manifest.json')))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        @endphp

        {{-- CSS --}}
        @if (isset($manifest['resources/css/app.css']))
            <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        @else
            <link rel="stylesheet" href="{{ asset('build/assets/app-cJ5vwioq.css') }}">
        @endif

        {{-- JS --}}
        @if (isset($manifest['resources/js/app.js']))
            <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
        @else
            <script type="module" src="{{ asset('build/assets/app-cJ5vwioq.js') }}"></script>
        @endif
    @else
        {{-- Fallback jika manifest.json tidak ditemukan --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-cJ5vwioq.css') }}">
        <script type="module" src="{{ asset('build/assets/app-cJ5vwioq.js') }}"></script>
    @endif


</head>

<body class="flex flex-col min-h-screen bg-black">

    @include('Component.Navbar')

    <main class="max-w bg-hero-lazy">
        @yield('content')
    </main>

    @include('Component.Footer')
    <div class="fixed bottom-24 right-2 group">
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
    <div class="fixed bottom-5 right-2 group">
        <a id="waButton" href="#" target="_blank"
            onclick="gtag('event', 'direct_whatsapp', {location: 'Floating Icon', page_title: document.title});"
            class="relative flex items-center justify-center transition rounded-full shadow-lg w-13 h-13 bg-green-500/90 backdrop-blur-sm hover:bg-green-600/90 hover:scale-110">
            <i class="text-3xl text-white fab fa-whatsapp"></i>
            <span
                class="absolute px-2 py-1 text-xs text-white transition -translate-y-1/2 bg-black rounded opacity-0 right-20 top-1/2 group-hover:opacity-100">
                Pesan Sekarang!
            </span>
        </a>
    </div>
</body>

<style>
    .bg-hero-lazy {
        background-color: black;
        min-height: 100vh;
    }

    .bg-hero-loaded {
        background-size: cover;
        background-position: center;
        transition: background-image 0.5s ease-in;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const el = document.querySelector(".bg-hero-lazy");
        const img = new Image();

        // Cek apakah browser support WebP
        function supportsWebP(callback) {
            const webP = new Image();
            webP.onload = webP.onerror = function () {
                callback(webP.height === 2);
            };
            webP.src = "data:image/webp;base64,UklGRiIAAABXRUJQVlA4TAYAAAAvAAAAAA...";
        }

        supportsWebP(function (supported) {
            img.src = supported ?
                "{{ asset('asset/main/main-bg.webp') }}" :
                "{{ asset('asset/main/main-bg.png') }}";
        });

        img.onload = () => {
            el.style.backgroundImage = `url('${img.src}')`;
            el.classList.add("bg-hero-loaded");
        };
    });

    document.addEventListener("DOMContentLoaded", function () {
        const waButtons = document.querySelectorAll(".waButton");

        waButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();

                let category = this.dataset.category || "";
                const item = this.dataset.item || "Menu";
                const categoriesWithPrefix = ["liwet-kastrol", "prasmanan", "snack-box",
                    "nasi-box", "mini", "tampah", "premium"
                ];

                let formattedCategory = "";
                if (category) {
                    formattedCategory = category
                        .split('-')
                        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                        .join(' ');
                }

                let displayCategory = "";
                if (category === "nasi-box") {
                    displayCategory = "Tumpeng Box";
                } else if (["mini", "tampah", "premium"].includes(category)) {
                    displayCategory = `Tumpeng ${formattedCategory}`;
                } else if (categoriesWithPrefix.includes(category)) {
                    displayCategory = formattedCategory;
                }

                const showCategory = categoriesWithPrefix.includes(category);

                const itemName = showCategory && displayCategory ?
                    `${displayCategory} - ${item}` :
                    item;

                if (typeof gtag === "function") {
                    gtag('event', 'whatsapp_click', {
                        item_name: itemName
                    });
                }

                const pesan = encodeURIComponent(
                    `Halo, saya tertarik untuk melakukan pemesanan ${itemName} dan ingin tahu informasi lebih lanjut. Apakah bisa dibantu?`
                );
                window.open(`https://wa.me/628112202117?text=${pesan}`, "_blank");
            });
        });
    });

    const floatingWA = document.getElementById("waButton");
    if (floatingWA) {
        floatingWA.addEventListener("click", function (e) {
            e.preventDefault();

            if (typeof gtag === "function") {
                gtag('event', 'direct_whatsapp', {
                    location: 'Floating Icon',
                    page_title: document.title
                });
            }

            const pesan = encodeURIComponent("Halo, saya ingin tahu lebih lanjut mengenai produk Anda.");
            window.open(`https://wa.me/628112202117?text=${pesan}`, "_blank");
        });
    }

    AOS.init();
</script>

</html>