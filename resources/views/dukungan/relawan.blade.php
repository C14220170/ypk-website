<x-app-layout>

    {{-- SECTION HEADER --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">

        {{-- Gradients --}}
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-snug drop-shadow-lg">
                Formulir Relawan
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Bergabunglah menjadi relawan Yayasan Pondok Kasih dan ambil bagian dalam pelayanan nyata.
            </p>
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    <section class="relative -mt-12 z-20">
        <div class="max-w-6xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12">
                <div class="relative z-10 max-w-4xl mx-auto">

                    {{-- Heading --}}
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-8">
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

                    {{-- CTA --}}
                    <div class="text-center mt-10">
                        <p class="text-gray-600 text-sm">
                            Masih ragu untuk mendaftar?
                            <a href="/program" class="font-semibold text-green-600 underline">Lihat program-program YPK di sini ya.</a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="h-10"></div>
        </div>
    </section>

</x-app-layout>
