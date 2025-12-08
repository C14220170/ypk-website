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

    {{-- ===== CONTENT ===== --}}
    <section class="px-6 md:px-12 lg:px-40 py-16">

        {{-- Kita buat Layout Card Manual (Looping) agar lebih fleksibel --}}
        
        {{-- 1. BULETIN BULANAN --}}
        @if($monthly->count() > 0)
        <div class="mb-16">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-green-800">Buletin Bulanan</h2>
                {{-- PERUBAHAN DI SINI --}}
                <a href="{{ route('buletin.show', 'Buletin Bulanan') }}" class="px-4 py-1 text-sm bg-green-700 text-white rounded-xl hover:bg-green-800">
                    Lihat Buletin Lainnya
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($monthly as $item)
                    {{-- Klik langsung direct ke Link Drive --}}
                    <a href="{{ $item->link }}" target="_blank" class="block bg-white rounded-2xl overflow-hidden shadow-md border hover:shadow-xl hover:-translate-y-1 transition group">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-44 object-cover group-hover:opacity-90">
                        <div class="p-3 text-center">
                            <p class="text-sm font-semibold text-green-800 group-hover:text-green-600">{{ $item->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- 2. LAPORAN TAHUNAN --}}
        @if($annual->count() > 0)
        <div class="mb-16">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-green-800">Laporan Tahunan</h2>
                {{-- PERUBAHAN DI SINI --}}
                <a href="{{ route('buletin.show', 'Laporan Tahunan') }}" class="px-4 py-1 text-sm bg-green-700 text-white rounded-xl hover:bg-green-800">
                    Lihat Laporan Lainnya
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($annual as $item)
                    <a href="{{ $item->link }}" target="_blank" class="block bg-white rounded-2xl overflow-hidden shadow-md border hover:shadow-xl hover:-translate-y-1 transition group">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-44 object-cover group-hover:opacity-90">
                        <div class="p-3 text-center">
                            <p class="text-sm font-semibold text-green-800 group-hover:text-green-600">{{ $item->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- 3. LAPORAN KEGIATAN --}}
        @if($event->count() > 0)
        <div class="mb-16">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-green-800">Laporan Kegiatan</h2>
                {{-- PERUBAHAN DI SINI --}}
                <a href="{{ route('buletin.show', 'Laporan Kegiatan') }}" class="px-4 py-1 text-sm bg-green-700 text-white rounded-xl hover:bg-green-800">
                    Lihat Kegiatan Lainnya
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($event as $item)
                    <a href="{{ $item->link }}" target="_blank" class="block bg-white rounded-2xl overflow-hidden shadow-md border hover:shadow-xl hover:-translate-y-1 transition group">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-44 object-cover group-hover:opacity-90">
                        <div class="p-3 text-center">
                            <p class="text-sm font-semibold text-green-800 group-hover:text-green-600">{{ $item->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- 4. PROFIL ORGANISASI --}}
        @if($profile->count() > 0)
        <div class="mb-16">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-green-800">Profil Organisasi</h2>
                {{-- PERUBAHAN DI SINI --}}
                <a href="{{ route('buletin.show', 'Profil Organisasi') }}" class="px-4 py-1 text-sm bg-green-700 text-white rounded-xl hover:bg-green-800">
                    Lihat Profil Lainnya
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($profile as $item)
                    <a href="{{ $item->link }}" target="_blank" class="block bg-white rounded-2xl overflow-hidden shadow-md border hover:shadow-xl hover:-translate-y-1 transition group">
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-44 object-cover group-hover:opacity-90">
                        <div class="p-3 text-center">
                            <p class="text-sm font-semibold text-green-800 group-hover:text-green-600">{{ $item->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif

    </section>

</x-app-layout>