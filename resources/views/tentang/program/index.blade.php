<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                Program Kami
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Program pelayanan Yayasan Pondok Kasih dalam memberkati dan melayani masyarakat.
            </p>
        </div>
    </section>

    {{-- ===================== MAIN CONTENT ===================== --}}
    <section class="relative -mt-16 px-6 md:px-12 lg:px-36 pb-20 z-20">
        <div class="max-w-7xl mx-auto">

            {{-- ================= GRID PROGRAM ================= --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($programs as $program)
                    <a href="{{ route('program.show', $program->id) }}"
                       class="bg-white rounded-3xl shadow-xl border border-gray-200 overflow-hidden group hover:-translate-y-1 hover:shadow-2xl transition">

                        {{-- Thumbnail --}}
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('storage/' . $program->image) }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                                 alt="{{ $program->title }}">
                        </div>

                        {{-- Content --}}
                        <div class="p-6 text-green-800">
                            <h3 class="font-bold text-xl text-green-800 group-hover:text-green-600 transition">
                                {{ $program->title }}
                            </h3>

                            <p class="text-green-700 text-sm mt-3 line-clamp-3">
                                {{ Str::limit($program->description, 150) }}
                            </p>

                            <div class="mt-4">
                                <span class="inline-block text-green-700 font-semibold">Selengkapnya →</span>
                            </div>
                        </div>

                    </a>
                @empty
                    <div class="col-span-full bg-white rounded-3xl p-8 text-center text-gray-600">
                        Tidak ada program untuk ditampilkan.
                    </div>
                @endforelse

            </div>


            {{-- ===================== PAGINATION ===================== --}}
            <div class="mt-14 flex justify-center">
                {{ $programs->onEachSide(1)->links('vendor.pagination.tailwind') }}
            </div>

        </div>
    </section>

</x-app-layout>
