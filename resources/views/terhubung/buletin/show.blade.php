<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        {{-- Content --}}
        <div class="relative z-10 text-center px-6">
            <p class="text-green-100 font-medium tracking-widest uppercase mb-2 text-sm md:text-base">
                Arsip Dokumen
            </p>
            <h1 class="text-3xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                {{ $category }}
            </h1>
            <p class="text-white/80 mt-4 text-base md:text-lg max-w-2xl mx-auto">
                Kumpulan dokumen dan publikasi resmi Yayasan Pondok Kasih untuk kategori {{ $category }}.
            </p>
        </div>
    </section>

    {{-- ===================== MAIN CONTENT ===================== --}}
    <section class="relative px-6 md:px-12 lg:px-20 py-20 z-20 bg-gray-50/50">
        <div class="max-w-7xl mx-auto">

            @if($items->count() > 0)
                {{-- GRID LAYOUT --}}
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($items as $item)
                        <a href="{{ $item->link }}" 
                           target="_blank" 
                           class="group flex flex-col bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-200 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full">
                            
                            {{-- Image Cover --}}
                            <div class="relative w-full h-64 overflow-hidden bg-gray-100">
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300 z-10"></div>
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                     alt="{{ $item->title }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                
                                {{-- Icon Overlay (Optional: Menunjukkan ini link eksternal) --}}
                                <div class="absolute top-4 right-4 z-20 bg-white/90 p-2 rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-6 flex flex-col flex-grow text-center">
                                <h3 class="text-lg font-bold text-green-800 group-hover:text-green-600 transition-colors mb-2">
                                    {{ $item->title }}
                                </h3>
                                <p class="text-xs text-gray-400 mt-auto">
                                    Klik untuk melihat dokumen
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- PAGINATION --}}
                <div class="mt-12 flex justify-center">
                    {{ $items->links() }}
                </div>

            @else
                {{-- EMPTY STATE --}}
                <div class="bg-white rounded-3xl shadow-xl p-12 text-center border border-gray-200 max-w-2xl mx-auto">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-700">Belum ada data</h3>
                    <p class="text-gray-500 mt-2">Dokumen untuk kategori ini belum tersedia saat ini.</p>
                </div>
            @endif

            {{-- BACK BUTTON --}}
            <div class="mt-16 text-center">
                <a href="{{ route('buletin.index') }}"
                   class="inline-block bg-green-600 text-white px-8 py-3 rounded-xl shadow hover:bg-green-700 hover:shadow-lg transition-all font-semibold transform hover:-translate-y-1">
                    ← Kembali ke Halaman Utama Buletin
                </a>
            </div>

        </div>
    </section>

</x-app-layout>