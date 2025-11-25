<x-app-layout>
    {{-- Enhanced Sejarah Page (Hero + Floating Image + Highlight + Timeline) --}}
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes floatUp {
            0% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
            100% { transform: translateY(0); }
        }
        .animate-fadeInUp { animation: fadeInUp 700ms ease-out both; }
        .animate-floatUp { animation: floatUp 4s ease-in-out infinite; }
    </style>

    {{-- HERO --}}
    <section class="relative bg-green-600 text-white pt-40 pb-24 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-28 bg-gradient-to-b from-green-800 to-transparent opacity-90"></div>
        <div class="absolute bottom-0 left-0 w-full h-28 bg-gradient-to-t from-green-800 to-transparent opacity-90"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <div class="text-center mb-10 animate-fadeInUp">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Sejarah Pondok Kasih</h1>
                <p class="mt-4 text-white/85 max-w-3xl mx-auto text-base md:text-lg">
                    Perjalanan pelayanan dan kasih sejak 1991 — dari langkah kecil menjadi gerakan yang memberi harapan.
                </p>
            </div>

            <div class="flex justify-center">
                <div class="relative transform-gpu animate-floatUp">
                    <div class="bg-white/8 backdrop-blur-md border border-white/20 rounded-3xl p-2 md:p-4 shadow-2xl">
                        <img src="/images/sejarah.jpg"
                             alt="Sejarah Pondok Kasih"
                             class="block max-w-md md:max-w-3xl rounded-2xl object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    <section class="relative -mt-12 z-20">
        <div class="max-w-6xl mx-auto px-6">

            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    {{-- LEFT – MAIN CONTENT --}}
                    <div class="lg:col-span-2 space-y-6">

                        {{-- Intro title --}}
                        <div class="mb-2">
                            <h2 class="text-2xl md:text-3xl font-extrabold text-green-800">Uluran Tangan Anda dan Kita</h2>
                            <p class="mt-2 text-gray-600">
                                Salurkan Donasi Anda untuk mewujudkan mimpi mereka. Berikut perjalanan lengkap Yayasan Pondok Kasih.
                            </p>
                        </div>

                        {{-- Highlight --}}
                        <div class="bg-green-50 border-l-4 border-green-600 p-5 rounded-lg">
                            <p class="text-green-800 font-semibold">
                                Sejak langkah pertama pada 1991, pelayanan YPK telah menyentuh kehidupan ribuan masyarakat miskin di Indonesia.
                            </p>
                        </div>

                        {{-- Full Content – EXACT USER TEXT --}}
                        <div class="prose prose-green max-w-none text-justify text-gray-700">

                            <h2 class="text-2xl font-bold text-green-700 mb-4">Sejarah Pondok Kasih</h2>

                            <p>
                                Sejak 1991, Yayasan Pondok Kasih (YPK) yang didirikan Mama Hana telah membantu masyarakat miskin dan tersisihkan
                                di Indonesia. Awalnya, Mama Hana tergerak membantu seorang pengemis di depan gerejanya. Dari tindakan sederhana itu,
                                ia termotivasi untuk mendirikan panti jompo, rumah anak, serta program bantuan lain bagi kaum terabaikan.
                                Saat krisis melanda pada 1996, YPK dengan sigap memberikan bantuan kebutuhan dasar, pendidikan, kesehatan,
                                hingga pemberdayaan masyarakat.
                            </p>

                            <p>
                                Seiring waktu, dedikasi YPK semakin dikenal luas. Pada 1999, organisasi internasional mulai mengakui upaya YPK
                                dalam membantu tanpa memandang suku, agama, atau status sosial. Bantuan dari lembaga seperti Indonesia Relief Fund (IRF)
                                dan World Blessing pun berdatangan, terutama selama masa krisis, konflik, dan bencana alam.
                                Pengakuan ini semakin diperkuat pada 2003, ketika YPK mendapat apresiasi dari pemerintah, pebisnis, media,
                                dan akademisi. Penghargaan bergengsi seperti Satya Lancana dan Dharma Karya Kencana pun diberikan atas kontribusinya.
                            </p>

                            <p>
                                Tidak hanya fokus pada kebutuhan fisik, YPK juga menyadari pentingnya identitas sipil bagi masyarakat miskin.
                                Oleh karena itu, sejak 2001, YPK memprakarsai Nikah Massal Lintas Agama untuk membantu pasangan mendapatkan
                                Akte Nikah dan Akte Lahir bagi anak-anak mereka. Program ini dimulai di Surabaya, lalu diperluas ke Jakarta
                                pada 2011 dan 2015, bekerja sama dengan pemerintah dan organisasi keagamaan. Keberhasilannya mencatat rekor dunia
                                sebagai penyelenggara Nikah Massal Lintas Agama terbesar membawa YPK meraih penghargaan internasional.
                            </p>

                            <p>
                                Untuk mewujudkan visinya yang lebih besar, YPK menggandeng keluarga, agama, pemerintah, bisnis, akademisi,
                                media, dan budaya guna melayani masyarakat prasejahtera. Melalui kolaborasi ini, YPK berupaya menjembatani
                                kesenjangan sosial dan ideologi yang sering memicu konflik, demi mewujudkan keadilan sosial bagi semua.
                                Dedikasi ini terus diakui secara global, dengan penghargaan seperti CNN Heroes Award dan Global Business and
                                Interfaith Peace Award menjadi bukti nyata kontribusi YPK.
                            </p>
                        </div>
                    </div>

                    {{-- RIGHT SIDEBAR --}}
                    <aside class="space-y-6">

                        <div class="bg-green-50 border border-green-100 rounded-lg p-4">
                            <h4 class="text-green-800 font-semibold">Fakta Singkat</h4>
                            <ul class="mt-3 text-gray-700 space-y-2 text-sm">
                                <li><strong>Didirikan</strong>: 1991</li>
                                <li><strong>Kota</strong>: Surabaya</li>
                                <li><strong>Program</strong>: Pendidikan, Kesehatan, Identitas Sipil</li>
                                <li><strong>Penghargaan</strong>: Satya Lancana, Dharma Karya Kencana</li>
                            </ul>
                        </div>

                        {{-- Timeline Section --}}
                        <div>
                            <h4 class="text-green-800 font-semibold mb-4">Perjalanan YPK</h4>

                            <div class="space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="w-11 h-11 rounded-full bg-green-700 text-white flex items-center justify-center font-bold">1991</div>
                                    <div class="flex-1 text-sm text-gray-700">
                                        <p class="font-semibold text-gray-800">Awal Pelayanan</p>
                                        <p class="mt-1">Mama Hana memulai pelayanan kepada kaum miskin.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-11 h-11 rounded-full bg-green-700 text-white flex items-center justify-center font-bold">1999</div>
                                    <div class="flex-1 text-sm text-gray-700">
                                        <p class="font-semibold text-gray-800">Pengakuan Internasional</p>
                                        <p class="mt-1">Lembaga internasional mulai mendukung YPK.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-11 h-11 rounded-full bg-green-700 text-white flex items-center justify-center font-bold">2003</div>
                                    <div class="flex-1 text-sm text-gray-700">
                                        <p class="font-semibold text-gray-800">Apresiasi Nasional</p>
                                        <p class="mt-1">Penghargaan Satya Lancana & Dharma Karya Kencana.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-11 h-11 rounded-full bg-green-700 text-white flex items-center justify-center font-bold">2011</div>
                                    <div class="flex-1 text-sm text-gray-700">
                                        <p class="font-semibold text-gray-800">Ekspansi Program</p>
                                        <p class="mt-1">Nikah Massal diperluas ke Jakarta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="/donasi" class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg">
                            Dukung Program Kami
                        </a>

                    </aside>
                </div>
            </div>

            <div class="h-10"></div>
        </div>
    </section>

</x-app-layout>
