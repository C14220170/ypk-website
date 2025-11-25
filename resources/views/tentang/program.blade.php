<x-app-layout>

    {{-- HERO SECTION --}}
    <section class="relative bg-green-600 text-white pt-36 pb-28 overflow-hidden">

        {{-- Gradients --}}
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


    {{-- CONTENT SECTION --}}
    <section class="relative -mt-12 z-20 px-6 md:px-16 lg:px-32 mb-20">
        <div class="max-w-6xl mx-auto">

            {{-- GRID PROGRAM --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- PROGRAM 1 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-1.jpg" class="h-40 w-full object-cover" alt="Program Sosial">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Pelayanan Sosial</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Menjangkau masyarakat miskin melalui bantuan kebutuhan pokok,
                            renovasi rumah, dapur umum, dan dukungan kemanusiaan lainnya.
                        </p>
                    </div>
                </div>

                {{-- PROGRAM 2 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-2.jpg" class="h-40 w-full object-cover" alt="Pemberdayaan Pendidikan">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Pendidikan & Beasiswa</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Memberikan pendidikan gratis, beasiswa, serta pelatihan keterampilan
                            agar generasi muda memiliki masa depan yang cerah.
                        </p>
                    </div>
                </div>

                {{-- PROGRAM 3 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-3.jpg" class="h-40 w-full object-cover" alt="Program Kesehatan">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Pelayanan Kesehatan</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Layanan kesehatan gratis, klinik keliling, pengobatan massal,
                            dan dukungan bagi keluarga yang membutuhkan.
                        </p>
                    </div>
                </div>

                {{-- PROGRAM 4 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-4.jpg" class="h-40 w-full object-cover" alt="Pemberdayaan Ekonomi">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Pemberdayaan Ekonomi</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Membantu masyarakat menjadi mandiri melalui pelatihan kerja,
                            modal usaha, dan pembinaan entrepreneurship.
                        </p>
                    </div>
                </div>

                {{-- PROGRAM 5 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-5.jpg" class="h-40 w-full object-cover" alt="Layanan Kemanusiaan">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Bantuan Bencana</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Respon cepat untuk korban gempa, banjir, kebakaran dan bencana lainnya,
                            dengan makanan, shelter, dan dukungan pemulihan.
                        </p>
                    </div>
                </div>

                {{-- PROGRAM 6 --}}
                <div class="bg-white shadow-xl rounded-2xl border border-gray-200 overflow-hidden hover:shadow-2xl transition duration-300">
                    <img src="/images/program-6.jpg" class="h-40 w-full object-cover" alt="Nikah Massal Lintas Agama">
                    <div class="p-6 text-green-800">
                        <h3 class="text-xl font-bold mb-2">Nikah Massal Lintas Agama</h3>
                        <p class="text-green-700 text-sm leading-relaxed">
                            Membantu pasangan mendapatkan legalitas pernikahan dan akte lahir anak,
                            tanpa memandang suku, agama, atau status sosial.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-app-layout>
