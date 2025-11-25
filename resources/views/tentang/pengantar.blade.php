<x-app-layout>

    {{-- HERO SECTION --}}
    <section class="relative bg-green-600 text-white pt-36 pb-28 overflow-hidden">

        {{-- Layering gradient --}}
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-green-800 to-transparent opacity-90"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-green-800 to-transparent opacity-90"></div>

        {{-- TITLE --}}
        <div class="relative z-10 text-center mb-10 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide drop-shadow-lg">
                Kata Pengantar
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/85 text-base md:text-lg">
                Sambutan dari Pendiri dan Presiden Yayasan Pondok Kasih
            </p>
        </div>

        {{-- IMAGE CENTERED --}}
        <div class="relative z-10 flex justify-center px-4">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-2 shadow-2xl">
                <img src="/images/pengantar.jpg"
                     class="max-w-md md:max-w-2xl rounded-2xl shadow-2xl object-cover"
                     alt="Kata Pengantar">
            </div>
        </div>

    </section>


    {{-- MAIN CONTENT --}}
    <section class="relative -mt-12 z-20 px-6 md:px-16 lg:px-32 mb-20">
        <div class="max-w-5xl mx-auto">

            {{-- CONTENT CARD --}}
            <div class="bg-white shadow-2xl rounded-3xl border border-gray-200 p-8 md:p-12">

                {{-- ACCENT BAR --}}
                <div class="w-20 h-2 bg-green-600 rounded-full mb-6"></div>

                <div class="text-justify leading-relaxed text-green-700 space-y-6 text-[15px] md:text-[16px]">

                    <p>
                        Tiga puluh yang lalu, saya terpanggil untuk bisa melayani orang miskin. Karena saat itu saya melihat betapa
                        miskinnya mereka-mereka yang tidak memiliki rumah, yang tinggal di daerah-daerah kumuh seperti kolong jembatan,
                        di pinggir rel kereta api, di pinggir sungai, di atas tumpukan-tumpukan sampah. Saya terpanggil untuk mereka,
                        sebab saya melihat bahwa mereka itu berharga di mata Tuhan.
                    </p>

                    <p>
                        Dan apabila saya mengasihi Tuhan, saya harus mengasihi orang-orang yang berharga di mata Tuhan, yaitu orang-orang
                        miskin. Dan ketika saya memulai pelayanan itu, dimulai dari seorang pengemis, saya tidak pernah pikirkan bahwa
                        pengalaman itu akan berdampak secara nasional dan internasional seperti yang kami alami saat ini.
                    </p>

                    <p>
                        Oleh sebab itu, Tahun 1991, kami mulai mendirikan Yayasan Pondok Kasih sebagai bentuk pengabdian kami kepada
                        Tuhan dengan menebar kasih kepada sesama.
                    </p>

                    {{-- SIGNATURE SECTION --}}
                    <div class="pt-6 border-t border-green-200">
                        <p class="font-bold text-green-800 text-lg">
                            Dr. Hana Amalia Vandayani Ananda, D.Min
                        </p>
                        <p class="text-green-700">
                            Kerab disapa “Mama Hana“
                            <br>
                            Founder dan Presiden Yayasan Pondok Kasih
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

</x-app-layout>
