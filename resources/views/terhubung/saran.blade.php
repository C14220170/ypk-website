<x-app-layout>

    {{-- ========== HERO SECTION ========== --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold drop-shadow-lg leading-snug">
                Saran & Masukan
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Kami sangat menghargai setiap saran dan masukan yang Anda berikan
                demi meningkatkan pelayanan dan program Yayasan Pondok Kasih.
            </p>
        </div>
    </section>


    {{-- ===================== FORM SECTION ===================== --}}
    <section class="relative -mt-20 px-6 md:px-12 lg:px-48 pb-24 z-20">
        <div class="max-w-4xl mx-auto bg-white p-10 md:p-12 rounded-3xl shadow-xl border border-gray-200">

            <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">
                Form Saran & Masukan
            </h2>

            <form class="space-y-6">

                {{-- Nama --}}
                <div>
                    <label class="block font-semibold text-green-800 mb-1">Nama Anda</label>
                    <input type="text"
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-600 focus:border-green-600"
                        placeholder="Masukkan nama Anda">
                </div>

                {{-- Email --}}
                <div>
                    <label class="block font-semibold text-green-800 mb-1">Email</label>
                    <input type="email"
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-600 focus:border-green-600"
                        placeholder="Masukkan email Anda">
                </div>

                {{-- Subjek --}}
                <div>
                    <label class="block font-semibold text-green-800 mb-1">Subjek</label>
                    <input type="text"
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-600 focus:border-green-600"
                        placeholder="Judul pesan Anda">
                </div>

                {{-- Pesan --}}
                <div>
                    <label class="block font-semibold text-green-800 mb-1">Pesan / Masukan</label>
                    <textarea rows="6"
                        class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-600 focus:border-green-600"
                        placeholder="Tuliskan pesan atau saran Anda..."></textarea>
                </div>

                {{-- Tombol Submit --}}
                <div class="text-center">
                    <button type="submit"
                        class="bg-green-600 text-white font-semibold px-8 py-3 rounded-xl shadow hover:bg-green-700 transition">
                        Kirim Saran
                    </button>
                </div>

            </form>

        </div>
    </section>

</x-app-layout>
