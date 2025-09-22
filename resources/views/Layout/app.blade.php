<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="flex flex-col min-h-screen bg-hero">

    @include('Component.Navbar')

    <main class="max-w">
        @yield('content')
    </main>

    @include('Component.Footer')

</body>

<style>
    .bg-hero {
        background-image: url('{{ asset('bg 1.png') }}');
        background-size: cover;
        background-position: center;
    }
</style>

</html>
