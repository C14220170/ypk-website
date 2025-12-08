<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                Saran & Masukan
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Kami sangat menghargai setiap saran dan masukan Anda untuk meningkatkan pelayanan Yayasan Pondok Kasih.
            </p>
        </div>
    </section>


    {{-- ========== CONTENT SECTION ========== --}}
    <section class="relative -mt-12 z-20">
        <div class="max-w-6xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12">
                <div class="relative z-10 max-w-4xl mx-auto">

                    {{-- Heading --}}
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-8">
                        Form Saran & Masukan
                    </h2>

                    {{-- Placeholder jika GForm belum disisipkan --}}
                    <div class="w-full h-[700px] bg-gray-100 rounded-xl border border-gray-300 flex items-center justify-center text-gray-500 text-center px-4">
                        <div>
                            <p class="text-lg font-semibold mb-2">Google Form Belum Terpasang</p>
                            <p class="text-sm mb-4">Masukkan link embed Google Form Anda nanti di bagian ini.</p>
                            <p class="text-xs text-gray-400">(iframe embed akan muncul di area ini)</p>
                        </div>
                    </div>

                    {{-- TEMPLATE UNTUK GFORM ASLI --}}
                    {{--
                    <iframe 
                        src="https://docs.google.com/forms/d/e/ID-FORM-ANDA/viewform?embedded=true" 
                        class="w-full h-[700px] mt-6 rounded-xl border"
                        frameborder="0" marginheight="0" marginwidth="0">
                        Loading…
                    </iframe>
                    --}}
                </div>
            </div>

            <div class="h-10"></div>
        </div>
    </section>

</x-app-layout>
