<!-- Navbar -->
<nav id="navbar"
    class="sticky top-0 z-50 bg-[#161616] transition-colors duration-300 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
    <div class="px-4 md:px-[1cm] lg:px-[2cm]">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile menu button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button id="menu-button" type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon hamburger -->
                    <svg id="icon-open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon close -->
                    <svg id="icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img src="{{ asset('logo.png') }}" alt="Tumpeng Bandung" class="w-[86px] h-[61px]" />
                </div>

                <!-- Desktop menu -->
                <div class="hidden sm:ml-6 sm:block pt-3">
                    <div class="flex space-x-4">
                        <!-- Beranda -->
                        <a href="{{ route('home') }}"
                            class="rounded-md px-3 py-2 text-md font-medium
            {{ request()->routeIs('home') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                            Beranda
                        </a>

                        <!-- Dropdown Desktop -->
                        <div class="relative group">
                            <button
                                class="rounded-md px-3 py-2 text-md font-medium
                {{ request()->routeIs('menu-tumpeng') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                                Menu
                            </button>
                            <!-- Isi Dropdown -->
                            <div
                                class="absolute left-0 top-full hidden w-72 bg-[#161616] rounded-lg shadow-lg group-hover:block overflow-hidden border border-white">
                                <!-- Tumpeng -->
                                <a href="{{ route('menu-tumpeng') }}"
                                    class="flex items-center gap-3 px-4 py-3 border-b border-white
                                  {{ request()->routeIs('menu-tumpeng') ? 'bg-gray-950/50 text-white' : 'text-white hover:bg-white/10' }}">

                                    <!-- Kotak ikon -->
                                    <span
                                        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-md shrink-0">
                                        <img class="w-7 h-7"
                                            src="https://img.icons8.com/material-rounded/24/dashboard-layout.png"
                                            alt="dashboard-layout" />
                                    </span>
                                    <!-- Teks -->
                                    <div>
                                        <p class="font-medium">Tumpeng</p>
                                        <p class="text-sm text-white">Tersedia tumpeng mini & besar untuk momen spesial
                                        </p>
                                    </div>
                                </a>


                                <!-- Paket Nasi -->
                                <a href="{{ route('menu-nasi') }}"
                                    class="flex items-center gap-3 px-4 py-3 border-b border-white
                                      {{ request()->routeIs('menu-nasi') ? 'bg-gray-950/50 text-white' : 'text-white hover:bg-white/10' }}">

                                    <!-- Kotak ikon -->
                                    <span
                                        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-md shrink-0">
                                        <img class="w-7 h-7"
                                            src="https://img.icons8.com/fluency-systems-filled/48/spoon-and-fork.png"
                                            alt="spoon-and-fork" />
                                    </span>

                                    <!-- Teks -->
                                    <div>
                                        <p class="font-medium">Paket Nasi</p>
                                        <p class="text-sm text-white">Nasi kotak praktis dengan lauk lengkap</p>
                                    </div>
                                </a>

                                <!-- Menu Lain -->
                                <a href="{{ route('menu-lainnya') }}"
                                    class="flex items-center gap-3 px-4 py-3 border-b border-white/10
                                      {{ request()->routeIs('menu-lainnya') ? 'bg-gray-950/50 text-white' : 'text-white hover:bg-white/10' }}">

                                    <!-- Kotak ikon -->
                                    <span
                                        class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-md shrink-0">
                                        <img class="w-7 h-7" src="https://img.icons8.com/sf-black-filled/64/layers.png"
                                            alt="layers" />
                                    </span>

                                    <!-- Teks -->
                                    <div>
                                        <p class="font-medium">Menu Lain</p>
                                        <p class="text-sm text-white">Pilihan menu tambahan untuk melengkapi santapan
                                        </p>
                                    </div>
                                </a>

                            </div>

                        </div>

                        <!-- Tentang -->
                        <a href="{{ route('tentang-kami') }}"
                            class="rounded-md px-3 py-2 text-md font-medium
            {{ request()->routeIs('tentang-kami') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                            Tentang Kami
                        </a>

                        <!-- Testimoni -->
                        <a href="{{ route('testimoni') }}"
                            class="rounded-md px-3 py-2 text-md font-medium
            {{ request()->routeIs('testimoni') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                            Testimoni
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden px-6 pt-4 pb-3 space-y-2 sm:hidden">
        <a href="{{ route('home') }}"
            class="block rounded-md px-3 py-2 text-base font-medium
        {{ request()->routeIs('home') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
            Beranda
        </a>

        <!-- Dropdown Mobile -->
        <div>
            <button id="dropdown-button"
                class="w-full flex items-center justify-between px-3 py-2 text-base font-medium
            {{ request()->routeIs('menu-tumpeng') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                Menu
                <svg class="w-4 h-4 ml-2 transition-transform duration-200" id="dropdown-icon" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="dropdown-mobile" class="hidden pl-3 mt-1 space-y-2">

                <!-- Tumpeng -->
                <a href="{{ route('menu-tumpeng') }}"
                    class="flex items-start gap-3 px-3 py-3 rounded-md
                {{ request()->routeIs('menu-tumpeng') ? 'bg-gray-950/50 text-white' : 'text-white hover:bg-white/10' }}">
                    <div>
                        <p class="font-medium">Tumpeng</p>
                    </div>
                </a>

                <!-- Paket Nasi -->
                <a href="#" class="flex items-start gap-3 px-3 py-3 rounded-md text-white hover:bg-white/10">
                    <div>
                        <p class="font-medium">Paket Nasi</p>
                    </div>
                </a>

                <!-- Menu Lain -->
                <a href="#" class="flex items-start gap-3 px-3 py-3 rounded-md text-white hover:bg-white/10">
                    <div>
                        <p class="font-medium">Menu Lain</p>
                    </div>
                </a>
            </div>
        </div>

        <a href="{{ route('tentang-kami') }}"
            class="block rounded-md px-3 py-2 text-base font-medium
        {{ request()->routeIs('tentang-kami') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
            Tentang Kami
        </a>
        <a href="#"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">
            Testimoni
        </a>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById("menu-button");
    const menu = document.getElementById("mobile-menu");
    const iconOpen = document.getElementById("icon-open");
    const iconClose = document.getElementById("icon-close");
    const dropdownBtn = document.getElementById("dropdown-button");
    const dropdown = document.getElementById("dropdown-mobile");
    const dropdownIcon = document.getElementById("dropdown-icon");

    // Toggle mobile menu
    menuBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        iconOpen.classList.toggle("hidden");
        iconClose.classList.toggle("hidden");
    });

    // Toggle dropdown mobile
    dropdownBtn.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
        dropdownIcon.classList.toggle("rotate-180");
    });

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("bg-black/70", "backdrop-blur-sm");
            navbar.classList.remove("bg-[#161616]");
        } else {
            navbar.classList.add("bg-[#161616]");
            navbar.classList.remove("bg-black/70", "backdrop-blur-sm");
        }
    });
</script>
