<nav 
    x-data="{ open: false, scrolled: false }"
    x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50;
        });
    "
    :class="scrolled 
        ? 'fixed top-0 left-0 w-full backdrop-blur-xl bg-black/40 shadow-lg transition-all duration-300 py-2' 
        : 'absolute top-0 left-0 w-full bg-transparent py-6'"
    class="z-50 transition-all duration-300">

    <!-- Primary Navigation -->
    <div class="max-w-7xl mx-auto px-10">
        <div class="flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <a href="/">
                    <img 
                        src="/images/logo.png" 
                        alt="Logo" 
                        :class="scrolled ? 'w-14 h-14' : 'w-24 h-24'"
                        class="object-contain transition-all duration-300"
                    >
                </a>
            </div>

            <!-- Desktop Navigation -->
            <ul class="hidden md:flex space-x-8 text-white font-medium transition-all duration-300">

                <li class="relative group">
                    <button class="hover:text-green-700 font-bold transition flex items-center">
                        Tentang YPK
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- DROPDOWN -->
                    <div class="absolute left-0 mt-3 w-56 bg-white text-black rounded-xl shadow-xl 
                                p-2 space-y-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                transition-all duration-200">

                        <a href="/sejarah" class="block px-4 py-2 hover:bg-gray-100 text-gray-800 rounded-lg">Sejarah YPK</a>
                        <a href="/pengantar" class="block px-4 py-2 hover:bg-gray-100 text-gray-800 rounded-lg">Kata Pengantar</a>
                        <a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-100 text-gray-800 rounded-lg">Visi, Misi & Nilai YPK</a>
                        <a href="/program" class="block px-4 py-2 hover:bg-gray-100 text-gray-800 rounded-lg">Program YPK</a>
                    </div>
                </li>

                <li class="relative group">
                    <button class="hover:text-green-700 font-bold transition flex items-center">
                        Terhubung Dengan YPK
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="absolute left-0 mt-3 w-56 bg-white text-black rounded-xl shadow-xl 
                                p-2 space-y-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                transition-all duration-200">

                        <a href="/berita" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Berita Terbaru</a>
                        <a href="/buletin" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Buletin Bulanan & Tahunan YPK</a>
                        <a href="/hubungi" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Hubungi YPK</a>
                        <a href="/saran" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Saran & Masukan YPK</a>
                    </div>
                </li>

                <li class="relative group">
                    <button class="hover:text-green-700 font-bold transition flex items-center">
                        Beri Dukungan Anda
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div class="absolute left-0 mt-3 w-56 bg-white text-black rounded-xl shadow-xl 
                                p-2 space-y-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible 
                                transition-all duration-200">

                        <a href="/donasi" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Donasi Sekarang</a>
                        <a href="/relawan" class="block px-4 py-2 hover:bg-gray-100 rounded-lg">Jadi Relawan YPK</a>
                    </div>
                </li>

            </ul>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button @click="open = !open"
                    class="text-white p-2 rounded-md hover:bg-white/20 transition">
                    <svg class="h-7 w-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" 
                              class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}"
                              class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': !open}" 
        class="md:hidden bg-white/10 backdrop-blur-md text-white px-6 py-4 rounded-b-xl space-y-2">

        <!-- Tentang YPK -->
        <div x-data="{ openSub: false }">
            <button @click="openSub = !openSub" class="w-full text-left py-2 font-semibold flex justify-between">
                Tentang YPK
                <span x-show="!openSub">▼</span>
                <span x-show="openSub">▲</span>
            </button>
            <div x-show="openSub" class="ml-4 space-y-1 text-gray-200">
                <a href="/sejarah" class="block py-1">Sejarah YPK</a>
                <a href="/pengantar" class="block py-1">Kata Pengantar</a>
                <a href="/visi-misi" class="block py-1">Visi, Misi & Nilai YPK</a>
                <a href="/program" class="block py-1">Program YPK</a>
            </div>
        </div>

        <!-- Terhubung Dengan YPK -->
        <div x-data="{ openSub: false }">
            <button @click="openSub = !openSub" class="w-full text-left py-2 font-semibold flex justify-between">
                Terhubung Dengan YPK
                <span x-show="!openSub">▼</span>
                <span x-show="openSub">▲</span>
            </button>
            <div x-show="openSub" class="ml-4 space-y-1 text-gray-200">
                <a href="/berita" class="block py-1">Berita Terbaru</a>
                <a href="/buletin" class="block py-1">Buletin Bulanan & Tahunan YPK</a>
                <a href="/hubungi" class="block py-1">Hubungi YPK</a>
                <a href="/saran" class="block py-1">Saran & Masukan YPK</a>
            </div>
        </div>

        <!-- Beri Dukungan Anda -->
        <div x-data="{ openSub: false }">
            <button @click="openSub = !openSub" class="w-full text-left py-2 font-semibold flex justify-between">
                Beri Dukungan Anda
                <span x-show="!openSub">▼</span>
                <span x-show="openSub">▲</span>
            </button>
            <div x-show="openSub" class="ml-4 space-y-1 text-gray-200">
                <a href="/donasi" class="block py-1">Donasi Sekarang</a>
                <a href="/relawan" class="block py-1">Jadi Relawan YPK</a>
            </div>
        </div>

    </div>

</nav>
