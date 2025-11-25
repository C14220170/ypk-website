<x-app-layout>

    {{-- SECTION HEADER --}}
    <section class="relative bg-green-600 text-white py-32 overflow-hidden">

        {{-- Layer Top --}}
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-green-800 to-green-600 opacity-90"></div>

        {{-- Layer Bottom --}}
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-green-800 to-green-600 opacity-90"></div>

        {{-- TITLE --}}
        <div class="relative z-10 text-center mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight leading-snug">
                Formulir Relawan
            </h1>
            <p class="text-white/80 mt-4 text-lg max-w-2xl mx-auto">
                Bergabunglah menjadi relawan Yayasan Pondok Kasih dan ambil bagian dalam pelayanan nyata.
            </p>
        </div>

        {{-- CONTENT WRAPPER --}}
        <div class="relative z-10 max-w-5xl mx-auto">

            {{-- CARD GOOGLE FORM --}}
            <div class="bg-white shadow-xl rounded-2xl p-6 md:p-10 border border-gray-200">

                {{-- Heading --}}
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
                    Formulir Relawan YPK
                </h2>

                {{-- PLACEHOLDER GOOGLE FORM --}}
                <div class="w-full h-[700px] bg-gray-100 rounded-xl border border-gray-300 flex items-center justify-center text-gray-500 text-center px-4">
                    <div>
                        <p class="text-lg font-semibold mb-2">Google Form Belum Terpasang</p>
                        <p class="text-sm mb-4">Silakan masukkan link embed Google Form nanti di bagian ini.</p>
                        <p class="text-xs text-gray-400">(iframe embed akan muncul di area ini)</p>
                    </div>
                </div>

                {{-- TEMPLATE UNTUK KETIKA SUDAH ADA GFORM --}}
                {{-- 
                <iframe 
                    src="https://docs.google.com/forms/d/e/ID-FORM-ANDA/viewform?embedded=true" 
                    class="w-full h-[700px] mt-6 rounded-xl border"
                    frameborder="0" marginheight="0" marginwidth="0">
                    Loading…
                </iframe>
                --}}
            </div>

            {{-- CTA --}}
            <div class="text-center mt-10">
                <p class="text-white/80 text-sm">
                    Masih ragu untuk mendaftar?
                    <a href="/program" class="font-semibold underline">Lihat program-program YPK di sini ya.</a>
                </p>
            </div>

        </div>

    </section>

</x-app-layout>
