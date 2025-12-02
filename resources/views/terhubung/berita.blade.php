<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                Berita & Kegiatan Yayasan Pondok Kasih
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Ikuti berbagai kegiatan, informasi terbaru, dan pelayanan kasih kepada masyarakat.
            </p>
        </div>
    </section>

    {{-- ===================== DUMMY DATA + PAGINATION ===================== --}}
    @php
        // ---------- DUMMY DATA ----------
        $dummyNews = [
            ['title' => 'Program Bantuan Sembako', 'date' => '12 Januari 2025', 'excerpt' => 'Yayasan Pondok Kasih menyalurkan bantuan sembako...', 'image' => '/images/news1.jpg', 'slug' => '#'],
            ['title' => 'Pendidikan Gratis Anak Putus Sekolah', 'date' => '8 Januari 2025', 'excerpt' => 'Program Rumah Belajar Kasih memberikan akses pendidikan...', 'image' => '/images/news2.jpg', 'slug' => '#'],
            ['title' => 'Renovasi Rumah Tidak Layak Huni', 'date' => '5 Januari 2025', 'excerpt' => 'Dengan dukungan relawan, rumah warga direnovasi...', 'image' => '/images/news3.jpg', 'slug' => '#'],
            ['title' => 'Kunjungan Kasih ke Panti Jompo', 'date' => '30 Desember 2024', 'excerpt' => 'Relawan berbagi keceriaan dengan lansia...', 'image' => '/images/news4.jpg', 'slug' => '#'],
            ['title' => 'Penanaman Pohon Wilayah Terdegradasi', 'date' => '27 Desember 2024', 'excerpt' => 'Aksi pelestarian lingkungan dilakukan...', 'image' => '/images/news5.jpg', 'slug' => '#'],
            ['title' => 'Distribusi Air Bersih', 'date' => '20 Desember 2024', 'excerpt' => 'Air bersih diberikan ke daerah terdampak kekeringan...', 'image' => '/images/news6.jpg', 'slug' => '#'],
            ['title' => 'Pelayanan Medis Gratis', 'date' => '15 Desember 2024', 'excerpt' => 'Warga mendapatkan pemeriksaan kesehatan gratis...', 'image' => '/images/news7.jpg', 'slug' => '#'],
            ['title' => 'Bakti Sosial Natal', 'date' => '10 Desember 2024', 'excerpt' => 'Perayaan Natal bersama masyarakat...', 'image' => '/images/news8.jpg', 'slug' => '#'],
            ['title' => 'Bangun Taman Belajar', 'date' => '1 Desember 2024', 'excerpt' => 'Taman belajar untuk anak-anak miskin dibangun...', 'image' => '/images/news9.jpg', 'slug' => '#'],
        ];

        // ---------- Pagination ----------
        $perPage = 6;
        $totalNews = count($dummyNews);
        $totalPages = $perPage > 0 ? (int) ceil($totalNews / $perPage) : 1;

        $currentPage = (int) request()->get('page', 1);
        if ($currentPage < 1) $currentPage = 1;
        if ($totalPages < 1) $totalPages = 1;
        if ($currentPage > $totalPages) $currentPage = $totalPages;

        $offset = ($currentPage - 1) * $perPage;
        $paginatedNews = array_slice($dummyNews, $offset, $perPage);

        function buildPaginationRange(int $current, int $total) {
            if ($total <= 7) {
                return range(1, $total);
            }

            $pages = [];

            $pages[] = 1;

            for ($i = $current - 2; $i < $current; $i++) {
                if ($i > 1 && $i < $total) $pages[] = $i;
            }

            if ($current > 1 && $current < $total) $pages[] = $current;

            for ($i = $current + 1; $i <= $current + 2; $i++) {
                if ($i > 1 && $i < $total) $pages[] = $i;
            }

            $pages[] = $total;

            $pages = array_values(array_unique($pages));
            sort($pages);

            return $pages;
        }

        $pagesToShow = buildPaginationRange($currentPage, $totalPages);
    @endphp


    {{-- ===================== MAIN CONTENT ===================== --}}
    <section class="relative -mt-16 px-6 md:px-12 lg:px-36 pb-20 z-20">
        <div class="max-w-7xl mx-auto">

            {{-- GRID BERITA --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($paginatedNews as $item)
                    <a href="{{ $item['slug'] }}"
                       class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden group hover:-translate-y-1 hover:shadow-2xl transition">

                        {{-- Thumbnail --}}
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ $item['image'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                                 alt="{{ $item['title'] }}">
                        </div>

                        {{-- Content --}}
                        <div class="p-6">
                            <h3 class="font-bold text-xl text-green-800 group-hover:text-green-600 transition">
                                {{ $item['title'] }}
                            </h3>

                            <p class="text-gray-500 text-sm mt-2">{{ $item['date'] }}</p>

                            <p class="text-gray-600 text-sm mt-4 line-clamp-3">{{ $item['excerpt'] }}</p>

                            <div class="mt-5">
                                <span class="inline-block text-green-700 font-semibold">Baca Selengkapnya →</span>
                            </div>
                        </div>

                    </a>
                @empty
                    <div class="col-span-full bg-white rounded-3xl p-8 text-center text-gray-600">
                        Tidak ada berita untuk ditampilkan.
                    </div>
                @endforelse
            </div>


            {{-- ================= PAGINATION (ELLIPSIS SAFE) ================= --}}
            @if ($totalPages > 1)
                <div class="mt-14 flex justify-center">
                    <div class="flex items-center gap-2">

                        {{-- Prev --}}
                        @if ($currentPage > 1)
                            <a href="?page={{ $currentPage - 1 }}"
                               class="px-4 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700 shadow">
                                ‹ Prev
                            </a>
                        @else
                            <span class="px-4 py-2 bg-gray-200 text-gray-400 rounded-xl cursor-not-allowed">‹ Prev</span>
                        @endif

                        {{-- Page numbers with automatic ellipsis --}}
                        @php
                            $lastShown = 0;
                        @endphp

                        @foreach ($pagesToShow as $page)
                            @if ($lastShown && $page - $lastShown > 1)
                                {{-- gap => show ellipsis --}}
                                <span class="px-3 text-gray-500 select-none">…</span>
                            @endif

                            <a href="?page={{ $page }}"
                               class="px-4 py-2 rounded-xl border shadow text-sm
                                    {{ $page == $currentPage
                                        ? 'bg-green-600 text-white border-green-600'
                                        : 'bg-white text-green-800 border-gray-300 hover:bg-green-50' }}">
                                {{ $page }}
                            </a>

                            @php $lastShown = $page; @endphp
                        @endforeach

                        {{-- Next --}}
                        @if ($currentPage < $totalPages)
                            <a href="?page={{ $currentPage + 1 }}"
                               class="px-4 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700 shadow">
                                Next ›
                            </a>
                        @else
                            <span class="px-4 py-2 bg-gray-200 text-gray-400 rounded-xl cursor-not-allowed">Next ›</span>
                        @endif

                    </div>
                </div>
            @endif

        </div>
    </section>

</x-app-layout>
