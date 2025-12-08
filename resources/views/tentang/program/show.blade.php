<x-app-layout>

    {{-- HERO SECTION --}}
    <section class="relative bg-green-600 text-white pt-36 pb-20">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl font-extrabold">{{ $program->title }}</h1>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="px-6 md:px-16 lg:px-32 py-14">

        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">

            {{-- Gambar --}}
            <img src="{{ asset($program->image) }}"
                 class="w-full h-72 object-cover" alt="{{ $program->title }}">

            {{-- Isi --}}
            <div class="p-8 text-green-800">
                <p class="text-green-700 leading-relaxed text-lg">
                    {{ $program->description }}
                </p>
            </div>

        </div>

        {{-- Back Button --}}
        <div class="mt-10 text-center">
            <a href="{{ route('program.index') }}"
               class="px-6 py-3 bg-green-700 text-white rounded-xl hover:bg-green-800 transition">
                ← Kembali ke Program
            </a>
        </div>

    </section>

</x-app-layout>
