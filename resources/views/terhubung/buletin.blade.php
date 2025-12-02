<x-app-layout>

    {{-- ===== HERO ===== --}}
    <section class="relative bg-green-600 text-white py-28 md:py-36">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative text-center z-10 px-6">
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">
                Buletin Bulanan & Tahunan,<br>
                Laporan Kegiatan, dan Profil Organisasi
            </h1>
        </div>
    </section>

    @php
        $monthly = [
            ['title' => 'Januari 2025', 'image' => '/images/bulletin/jan.jpg'],
            ['title' => 'Februari 2025', 'image' => '/images/bulletin/feb.jpg'],
            ['title' => 'Maret 2025', 'image' => '/images/bulletin/mar.jpg'],
            ['title' => 'April 2025', 'image' => '/images/bulletin/apr.jpg'],
        ];

        $annual = [
            ['title' => 'Laporan Tahunan 2023', 'image' => '/images/annual/2023.jpg'],
            ['title' => 'Laporan Tahunan 2022', 'image' => '/images/annual/2022.jpg'],
            ['title' => 'Laporan Tahunan 2021', 'image' => '/images/annual/2021.jpg'],
        ];

        $event = [
            ['title' => 'Festival Pemuda', 'image' => '/images/event/festival.jpg'],
            ['title' => 'Ramadhan Care', 'image' => '/images/event/ramadhan.jpg'],
            ['title' => 'Safari Natal', 'image' => '/images/event/natal.jpg'],
        ];

        $profile = [
            ['title' => 'Profil Organisasi', 'image' => '/images/profile/profile.jpg'],
        ];
    @endphp

    {{-- ===== CONTENT ===== --}}
    <section class="px-6 md:px-12 lg:px-40 py-16">

        {{-- ====== CATEGORY COMPONENT START ====== --}}
        @php
            function renderCategory($title, $button, $items) {
                echo '
                    <div class="mb-16">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-bold text-green-800">'.$title.'</h2>
                            <a href="#" class="px-4 py-1 text-sm bg-green-700 text-white rounded-xl hover:bg-green-800">'.$button.'</a>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                ';

                foreach ($items as $item) {
                    echo '
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md border hover:shadow-xl hover:-translate-y-1 transition">
                            <img src="'.$item['image'].'" class="w-full h-44 object-cover">
                            <div class="p-3 text-center">
                                <p class="text-sm font-semibold text-green-800">'.$item['title'].'</p>
                            </div>
                        </div>
                    ';
                }

                echo '
                        </div>
                    </div>
                ';
            }
        @endphp
        {{-- ====== CATEGORY COMPONENT END ====== --}}

        {{-- Buletin Bulanan --}}
        {!! renderCategory('Buletin Bulanan', 'Lihat Buletin Lainnya', $monthly) !!}

        {{-- Laporan Tahunan --}}
        {!! renderCategory('Laporan Tahunan', 'Lihat Laporan Lainnya', $annual) !!}

        {{-- Laporan Kegiatan --}}
        {!! renderCategory('Laporan Kegiatan', 'Lihat Kegiatan Lainnya', $event) !!}

        {{-- Profil Organisasi --}}
        {!! renderCategory('Profil Organisasi', 'Lihat Profil Lainnya', $profile) !!}

    </section>

</x-app-layout>
