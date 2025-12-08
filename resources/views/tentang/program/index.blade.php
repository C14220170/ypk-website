<x-app-layout>

    {{-- HERO --}}
    <section class="relative bg-green-600 text-white pt-36 pb-28 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-green-800 to-transparent opacity-90"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-green-800 to-transparent opacity-90"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide drop-shadow-lg">
                Program Kami
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/85 text-base md:text-lg">
                Program pelayanan Yayasan Pondok Kasih dalam memberkati dan melayani masyarakat
            </p>
        </div>
    </section>


    {{-- CONTENT --}}
    <section class="relative -mt-12 z-20 px-6 md:px-16 lg:px-32 mb-20">
        <div class="max-w-6xl mx-auto">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($programs as $program)
                    <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">

                        {{-- GAMBAR --}}
                        <img src="{{ asset($program->image) }}"
                            class="h-40 w-full object-cover"
                            alt="{{ $program->title }}">

                        {{-- TEXT --}}
                        <div class="p-6 text-green-800">
                            <h3 class="text-xl font-bold mb-2">
                                <a href="{{ route('program.show', $program->id) }}" class="hover:underline">
                                    {{ $program->title }}
                                </a>
                            </h3>

                            <p class="text-green-700 text-sm leading-relaxed">
                                {{ Str::limit($program->description, 130) }}
                            </p>

                            <a href="{{ route('program.show', $program->id) }}"
                               class="inline-block mt-3 text-green-700 font-semibold hover:text-green-900">
                                Selengkapnya →
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>

            {{-- PAGINATION --}}
            <div class="mt-12">
                {{ $programs->onEachSide(1)->links('vendor.pagination.tailwind') }}
            </div>

        </div>
    </section>

</x-app-layout>
