<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="preload" as="image" href="{{ asset('asset\main\main-bg.webp') }}">
    {{-- <link rel="preload" as="image" href="{{ asset('bg 1.png') }}"> --}}
</head>

<body class="flex flex-col min-h-screen bg-black">

    @include('Component.Navbar')

    <main class="max-w bg-hero-lazy">
        @yield('content')
    </main>

    @include('Component.Footer')

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
    document.addEventListener("DOMContentLoaded", function() {
        const el = document.querySelector(".bg-hero-lazy");
        const img = new Image();

        // Cek apakah browser support WebP
        function supportsWebP(callback) {
            const webP = new Image();
            webP.onload = webP.onerror = function() {
                callback(webP.height === 2);
            };
            webP.src = "data:image/webp;base64,UklGRiIAAABXRUJQVlA4TAYAAAAvAAAAAA...";
        }

        supportsWebP(function(supported) {
            img.src = supported ?
                "{{ asset('asset/main/main-bg.webp') }}" // ✅ pakai WebP
                :
                "{{ asset('asset/main/main-bg.png') }}"; // 🔙 fallback PNG
        });

        img.onload = () => {
            el.style.backgroundImage = `url('${img.src}')`;
            el.classList.add("bg-hero-loaded");
        };
    });

    // kalau kamu pakai AOS
    AOS.init();
</script>

</html>
