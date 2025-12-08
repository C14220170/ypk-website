<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                {{ $berita->title }}
            </h1>

            <p class="text-white/80 mt-4 text-base md:text-lg">
                {{ $berita->created_at->translatedFormat('d F Y') }}
            </p>
        </div>
    </section>


    {{-- ===================== MAIN CONTENT ===================== --}}
    <section class="relative px-6 md:px-12 lg:px-36 py-20 z-20">
        <div class="max-w-5xl mx-auto">

            {{-- IMAGE --}}
            <div class="w-full h-[350px] md:h-[450px] overflow-hidden rounded-3xl shadow-lg border border-gray-200">
                <img src="{{'storage/' . asset($berita->image) }}"
                     alt="{{ $berita->title }}"
                     class="w-full h-full object-cover">
            </div>

            {{-- CONTENT --}}
            <div class="mt-10 bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-200">

                <h2 class="text-3xl font-bold text-green-800 mb-6">
                    {{ $berita->title }}
                </h2>

                <p class="text-gray-600 leading-relaxed text-lg whitespace-pre-line">
                    {{ $berita->description }}
                </p>

            </div>


            {{-- BACK BUTTON --}}
            <div class="mt-10 text-center">
                <a href="{{ route('berita.index') }}"
                   class="inline-block bg-green-600 text-white px-8 py-3 rounded-xl shadow hover:bg-green-700 transition font-semibold">
                    ← Kembali ke Daftar Berita
                </a>
            </div>

        </div>
    </section>

</x-app-layout>
