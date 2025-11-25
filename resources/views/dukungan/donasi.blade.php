<x-app-layout>

    {{-- SECTION HEADER --}}
    <section class="relative bg-green-600 text-white py-28 md:py-36 overflow-hidden">

        {{-- Layer atas & bawah --}}
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-green-800 to-green-600 opacity-90"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-green-800 to-green-600 opacity-90"></div>

        {{-- HEADER TEXT --}}
        <div class="relative z-10 text-center mb-16 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                Uluran Tangan Anda dan Kita,<br> Selalu Berarti Untuk Mereka.
            </h1>

            <p class="text-white/80 mt-5 max-w-2xl mx-auto text-base md:text-lg">
                Salurkan Donasi Anda untuk Wujudkan Mimpi Mereka Dengan Berbagi dan Memberi.
                Hidup Terasa Jauh Lebih Berarti. Berikan Donasi Terbaik Anda Sekarang.
            </p>
        </div>

        {{-- MAIN CONTENT --}}
        <div class="relative z-10 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 px-6">

            {{-- LEFT CONTENT --}}
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-xl border border-gray-200 w-full max-w-sm self-start">

                {{-- QRIS --}}
                <div class="flex flex-col items-center">
                    <img src="/images/qris.png"
                        class="w-48 h-48 object-contain border rounded-xl shadow"
                        alt="QRIS">

                    <div class="mt-5 text-gray-800 text-center space-y-1">
                        <p class="font-bold text-lg">BANK BCA KCU DARMO</p>
                        <p class="font-bold text-xl tracking-wide">088.381.1817</p>
                        <p class="text-sm">Swift Code: <span class="font-bold">CENAIDJA</span></p>
                        <p class="font-semibold text-sm">A.n Yayasan Pondok Kasih</p>
                    </div>
                </div>

            </div>


            {{-- RIGHT FORM --}}
            <div class="bg-gray-50 text-black p-8 rounded-2xl shadow-xl border border-gray-200">

                <form action="#" class="space-y-6">

                    {{-- Nama --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Nama Anda (Your Name)
                            <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="text"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="font-semibold text-gray-700">Email Anda (Your Email)</label>
                        <input type="email"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600">
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Nomor Ponsel (Your Phone)
                            <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="text"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Jenis Donasi --}}
                    <div>
                        <label class="font-semibold text-gray-700 block mb-2">
                            Jenis Donasi (Donation Type)
                        </label>

                        <div class="space-y-2">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="jenis" class="text-green-600 focus:ring-green-600">
                                Uang Tunai/Transfer (Cash/Transfer)
                            </label>

                            <label class="flex items-center gap-2">
                                <input type="radio" name="jenis" class="text-green-600 focus:ring-green-600">
                                Barang (Goods)
                            </label>
                        </div>
                    </div>

                    {{-- Tujuan --}}
                    <div>
                        <label class="font-semibold text-gray-700">Tujuan Donasi (Donation Goal)</label>
                        <textarea rows="3"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"></textarea>
                    </div>

                    {{-- Upload bukti --}}
                    <div>
                        <label class="font-semibold text-gray-700">Unggah bukti (Attach Documents / Images)</label>
                        <input type="file"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm bg-white focus:ring-green-600 focus:border-green-600">
                    </div>

                    {{-- Info file --}}
                    <p class="text-gray-600 text-sm">
                        Accepted: jpg, pdf, png, jpeg, bmp. Max size: 5 MB.
                    </p>

                    <p class="text-gray-500 text-sm">
                        Bukti transfer, bukti penerimaan barang, dll.
                    </p>

                    {{-- Submit --}}
                    <button
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg shadow-md transition">
                        SEND YOUR LOVE
                    </button>

                </form>

            </div>

        </div>

    </section>

</x-app-layout>
