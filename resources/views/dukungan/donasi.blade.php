<x-app-layout>

    {{-- SECTION HEADER --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">

        {{-- Gradients --}}
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        <div class="relative z-10 text-center mb-14 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-snug drop-shadow-lg">
                Uluran Tangan Anda dan Kita,<br>
                Selalu Berarti Untuk Mereka.
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Salurkan Donasi Anda untuk Wujudkan Mimpi Mereka Dengan Berbagi dan Memberi.
                Hidup Terasa Lebih Indah ketika kita mau berbagi. Berikan Donasi Terbaik Anda Sekarang.
            </p>
        </div>
    </section>


    {{-- MAIN SECTION --}}
    <section class="relative -mt-16 px-6 md:px-12 lg:px-36 pb-20 z-20">

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

            {{-- LEFT – QRIS CARD --}}
            <div class="bg-white p-4 rounded-3xl shadow-xl border border-green-100 max-w-fit h-fit mx-auto">

                <div class="rounded-2xl overflow-hidden">
                    <img src="/images/qris.png"
                        class="w-52 h-52 object-contain"
                        alt="QRIS">
                </div>

                {{-- QRIS INFO --}}
                <div class="mt-3 text-center text-green-900 leading-tight">
                    <p class="font-bold text-lg uppercase tracking-wide">BANK BCA KCU DARMO</p>
                    <p class="font-bold text-2xl tracking-wider">088.381.1817</p>
                    <p class="text-sm">Swift Code: <span class="font-bold">CENAIDJA</span></p>
                    <p class="font-semibold text-sm">A.n Yayasan Pondok Kasih</p>
                </div>

            </div>



            {{-- RIGHT – FORM DONASI --}}
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-200">

                <h2 class="text-2xl font-bold text-green-800 mb-6">
                    Formulir Donasi Anda
                </h2>

                <form action="#" class="space-y-6">

                    {{-- Nama --}}
                    <div>
                        <label class="font-semibold text-gray-700">Nama Anda <span class="text-red-600 text-sm">(Required)</span></label>
                        <input type="text"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="font-semibold text-gray-700">Email Anda</label>
                        <input type="email"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600">
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="font-semibold text-gray-700">Nomor Ponsel <span class="text-red-600 text-sm">(Required)</span></label>
                        <input type="text"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Jenis Donasi --}}
                    <div>
                        <label class="font-semibold text-gray-700 block mb-2">Jenis Donasi</label>

                        <div class="space-y-2">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="jenis" class="text-green-600 focus:ring-green-600">
                                Uang Tunai / Transfer
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="radio" name="jenis" class="text-green-600 focus:ring-green-600">
                                Barang (Goods)
                            </label>
                        </div>
                    </div>

                    {{-- Tujuan --}}
                    <div>
                        <label class="font-semibold text-gray-700">Tujuan Donasi</label>
                        <textarea rows="3"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"></textarea>
                    </div>

                    {{-- Upload --}}
                    <div>
                        <label class="font-semibold text-gray-700">Unggah Bukti Donasi</label>
                        <input type="file"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm bg-white focus:ring-green-600 focus:border-green-600">
                    </div>

                    <p class="text-gray-600 text-sm">
                        Accepted: jpg, pdf, png, jpeg, bmp — Max size: 5 MB.
                    </p>

                    <p class="text-gray-500 text-sm -mt-3">
                        Contoh: bukti transfer, bukti pengiriman barang, dll.
                    </p>

                    {{-- Submit --}}
                    <button
                        class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl shadow-lg transition">
                        SEND YOUR LOVE
                    </button>

                </form>

            </div>

        </div>

    </section>

</x-app-layout>
