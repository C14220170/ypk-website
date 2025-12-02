<x-app-layout>

    {{-- SECTION HEADER --}}
    <section class="relative bg-green-600 text-white py-32 md:py-40 overflow-hidden">
        
        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-b from-green-800/70 to-green-600 opacity-95"></div>

        {{-- TITLE --}}
        <div class="relative z-10 text-center mb-14 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-snug drop-shadow-lg">
                Hubungi YPK
            </h1>

            <p class="text-white/80 mt-6 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                Kirimkan pesan bermakna untuk kami. Tim Yayasan Pondok Kasih akan dengan senang hati membantu Anda.
            </p>
        </div>

    </section>


    {{-- MAIN SECTION --}}
    <section class="relative -mt-16 px-6 md:px-12 lg:px-36 pb-20 z-20">

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">


            {{-- CONTACT INFO --}}
            <div class="bg-white p-6 rounded-3xl shadow-xl border border-green-100 max-w-sm mx-auto h-fit">

                <h2 class="text-xl font-bold text-green-800 mb-6 text-center">
                    Informasi Kontak
                </h2>

                <div class="space-y-5 text-green-900">

                    {{-- Alamat --}}
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">

                            {{-- ICON --}}
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor" class="w-6 h-6 text-green-700">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M19.5 10c0 7-7.5 11-7.5 11S4.5 17 4.5 10a7.5 7.5 0 1115 0z" />
                            </svg>

                        </div>

                        <div>
                            <p class="font-bold text-sm">Lokasi Sekretariat</p>
                            <p class="text-xs leading-relaxed">
                                Jl. Kedungsari II/82 Surabaya, Jawa Timur, Indonesia
                            </p>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">

                            {{-- ICON --}}
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor" class="w-6 h-6 text-green-700">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                        </div>

                        <div>
                            <p class="font-bold text-sm">Email</p>
                            <p class="text-xs">infocenter@pondokkasih.org</p>
                        </div>
                    </div>

                    {{-- Jam Operasional --}}
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">

                            {{-- ICON --}}
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor" class="w-6 h-6 text-green-700">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 6v6l4 2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M12 22a10 10 0 110-20 10 10 0 010 20z" />
                            </svg>

                        </div>

                        <div>
                            <p class="font-bold text-sm">Jam Operasional</p>
                            <p class="text-xs leading-relaxed">
                                Senin–Sabtu: 09.00 – 19.00 WIB<br>
                                Minggu: Tutup
                            </p>
                        </div>
                    </div>

                </div>

            </div>




            {{-- FORM --}}
            <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-200">

                <h2 class="text-2xl font-bold text-green-800 mb-6">
                    Kirimkan Pesan Anda
                </h2>

                <form action="#" class="space-y-6">

                    {{-- Name --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Nama Anda <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="text"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Email Anda <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="email"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Nomor Telepon <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="text"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Subject --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Subjek <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <input type="text"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label class="font-semibold text-gray-700">
                            Pesan Anda <span class="text-red-600 text-sm">(Required)</span>
                        </label>
                        <textarea rows="5"
                            class="mt-2 w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-600 focus:border-green-600"
                            required></textarea>
                    </div>

                    {{-- Submit --}}
                    <button
                        class="mt-4 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-xl shadow-lg transition">
                        Kirim
                    </button>

                </form>

            </div>

        </div>


        {{-- MAP SECTION --}}
        <div class="max-w-7xl mx-auto mt-16 rounded-3xl overflow-hidden shadow-xl border border-green-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.264801694028!2d112.74185857504753!3d-7.324125392684057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb142544adc9%3A0x35036c88ab718d62!2sYayasan%20Pondok%20Kasih%20-%20Kendangsari%20Surabaya!5e0!3m2!1sen!2sid!4v1764649150969!5m2!1sen!2sid"
                class="w-full h-[400px]" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

    </section>

</x-app-layout>
