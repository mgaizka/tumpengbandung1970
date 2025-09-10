<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">

    {{-- Navbar --}}
    <header class="bg-white shadow">
        <div class="container flex items-center p-4 mx-auto justify-left">
            <nav class="space-x-4">
                <a href="{{ url('/') }}" class="text-xl font-bold hover:text-blue-500">Tumpeng Bandung 1970</a>
                <a href="{{ url('/') }}" class="hover:text-blue-500">Beranda</a>
                <a href="{{ url('/menu') }}" class="hover:text-blue-500">Menu</a>
                <a href="{{ url('/about') }}" class="hover:text-blue-500">Tentang Kami</a>
                <a href="{{ url('/testimoni') }}" class="hover:text-blue-500">Testimoni</a>
            </nav>
        </div>
    </header>

    {{-- Content --}}
    <main class="container flex-1 p-4 mx-auto">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="p-4 text-center text-white bg-gray-800">
        <p>&copy; {{ date('Y') }} CompanyName. All rights reserved.</p>
    </footer>

</body>

</html>
