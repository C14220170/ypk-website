<x-app-layout>
    {{-- Navbar --}}
    <nav class="absolute top-0 left-0 w-full flex justify-between items-center px-10 py-6 bg-transparent z-50">
        <div class="flex items-center space-x-2">
            <img src="/images/logo.png" alt="Logo" class="w-24 h-24">
        </div>
        <ul class="hidden md:flex space-x-8 text-white font-medium">
            <li><a href="#" class="hover:text-green-700 font-bold">Home</a></li>
            <li><a href="#" class="hover:text-green-700 font-bold">About Us</a></li>
            <li><a href="#" class="hover:text-green-700 font-bold">Gallery</a></li>
            <li><a href="#" class="hover:text-green-700 font-bold">Shop</a></li>
            <li><a href="#" class="hover:text-green-700 font-bold">Blog</a></li>
            <li><a href="#" class="hover:text-green-700 font-bold">Contact</a></li>
        </ul>
    </nav>

    {{-- Hero Slider --}}
    <div 
        x-data="{
            active: 0,
            slides: [
                {
                    image: '/images/banner1.jpg',
                    title: 'Anak',
                    description: 'Serangkaian program dan intervensi yang dirancang untuk mendukung kesejahteraan, perkembangan dan hak-hak anak.',
                    btn1: { text: 'Kenal lebih dekat', link: '#' },
                },
                {
                    image: '/images/banner2.jpg',
                    title: 'Pemuda',
                    description: 'Mendorong kaum muda untuk berkomitmen pada perdamaian dan persatuan tanpa memandang suku, ras, dan agama untuk mendukung transformasi bangsa.',
                    btn1: { text: 'Kenal lebih dekat', link: '#' },
                },
                {
                    image: '/images/banner3.jpg',
                    title: 'Keluarga',
                    description: 'Meliputi pelatihan, konseling, pendidikan, dan layanan untuk membantu keluarga mengatasi kemiskinan, konflik, atau masalah kesehatan, sehingga mereka bisa hidup lebih baik di masyarakat.',
                    btn1: { text: 'Kenal lebih dekat', link: '#' },
                }
            ]
        }" 
        x-init="setInterval(() => active = (active + 1) % slides.length, 6000)"
        class="relative h-screen overflow-hidden"
    >
        {{-- Slides --}}
        <template x-for="(slide, index) in slides" :key="index">
            <div 
                class="absolute inset-0 transition-opacity duration-1000 ease-in-out" 
                :class="active === index ? 'opacity-100 z-20' : 'opacity-0 z-10'"
            >
                <img :src="slide.image" class="w-full h-full object-cover" alt="">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                {{-- Content per slide --}}
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4 z-30">
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-4" x-text="slide.title"></h1>
                    <p class="text-lg max-w-2xl mb-8" x-text="slide.description"></p>
                    <div class="flex space-x-4">
                        <a :href="slide.btn1.link" class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-full font-semibold" x-text="slide.btn1.text"></a>
                    </div>
                </div>
            </div>
        </template>

        {{-- Dots indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2 z-30">
            <template x-for="(slide, index) in slides" :key="index">
                <button 
                    class="w-3 h-3 rounded-full transition-all duration-300" 
                    :class="active === index ? 'bg-green-700 w-4 h-4' : 'bg-white/70'"
                    @click="active = index"
                ></button>
            </template>
        </div>
    </div>

    {{-- Program Utama YPK Section --}}
    <section class="py-20 bg-white">
        <div class="text-center mb-12">
            <p class="text-green-600 italic">Wujudkan aksi nyatamu bersama kami, melalui</p>
            <h2 class="text-3xl md:text-4xl font-bold text-green-800 mt-2">Program Utama YPK</h2>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid gap-8 md:grid-cols-3">
            {{-- Card 1 --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                <img src="/images/banner1.jpg" alt="Program Anak" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold mb-2">Pencerdasan Anak Bangsa (PAB)</h3>
                <p class="text-gray-600 mb-4">
                    Ketidaksetaraan merenggut banyak hak asasi manusia, salah satunya adalah pendidikan.
                    Mobil Pintar hadir untuk memberantas ketimpangan dan mendistribusikan pendidikan
                    secara merata bagi generasi penerus bangsa yang luar biasa.
                </p>
                <a href="#" class="text-green-600 font-semibold hover:underline flex items-center">
                    Kenal lebih dekat
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                <img src="/images/banner2.jpg" alt="Program PHS" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold mb-2">Percepatan Pemenuhan Hak Sipil (PHS): Akta Lahir & Akta Nikah.</h3>
                <p class="text-gray-600 mb-4">
                    Pelanggaran hak-hak sipil yang sering dialami oleh masyarakat pra-sejahtera tidak banyak disoroti oleh sebagian besar pihak.
                    Padahal hak-hak sipil sama pentingnya dengan kebutuhan sandang, pangan dan papan.
                </p>
                <a href="#" class="text-green-600 font-semibold hover:underline flex items-center">
                    Kenal lebih dekat
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Card 3 --}}
            <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                <img src="/images/banner3.jpg" alt="Program PAP3B" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold mb-2">Pemuda menjadi Agen Perdamaian, Pemersatu dan Perubahan Bangsa (PAP3B).</h3>
                <p class="text-gray-600 mb-4">
                    Persembahan berharga dari para Pemuda Indonesia dari seluruh provinsi sebagai wujud kecintaan mereka terhadap persatuan dan kesatuan bangsa dikemas dalam Festival Tahunan ini.
                </p>
                <a href="#" class="text-green-600 font-semibold hover:underline flex items-center">
                    Kenal lebih dekat
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        {{-- Tombol Bawah --}}
        <div class="flex justify-center mt-10">
            <a href="#" class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-full font-semibold">
                Program YPK Lainnya
            </a>
        </div>
    </section>

    {{-- Section: Sponsor / Mitra --}}
    <section class="relative bg-green-600 text-white py-16 overflow-hidden">
        {{-- Layering warna atas --}}
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-green-800 to-green-600 opacity-90"></div>

        {{-- Layering warna bawah --}}
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-green-800 to-green-600 opacity-90"></div>

        {{-- Konten utama --}}
        <div class="relative z-10 text-center mb-12">
            <h3 class="text-2xl md:text-3xl font-bold tracking-wide">Yayasan Pondok Kasih Didukung Oleh</h3>
            <p class="text-white/80 mt-2 text-sm md:text-base">
                Kami berterima kasih atas dukungan para mitra yang turut berkontribusi.
            </p>
        </div>

        {{-- Logo Sponsor --}}
        <div class="relative z-10 flex flex-wrap justify-center items-center gap-8 px-10">
            @for ($i = 1; $i <= 7; $i++)
                <div class="group bg-white/10 hover:bg-white/20 backdrop-blur-sm p-4 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                    <img src="/images/sponsor.jpeg" 
                        alt="Sponsor {{ $i }}" 
                        class="h-12 md:h-16 object-contain opacity-90 group-hover:opacity-100 transition duration-300">
                </div>
            @endfor
        </div>
    </section>

    {{-- Section: Berita Terbaru --}}
    <section class="py-20 bg-white relative z-10">
        <div class="text-center mb-10">
            <p class="text-green-600 font-medium uppercase tracking-wide">Yayasan Pondok Kasih</p>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Berita terbaru YPK</h2>
        </div>

        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 px-6">
            {{-- Kartu 1 --}}
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="relative">
                    <img src="/images/banner1.jpg" alt="Berita 1" class="w-full h-48 object-cover">
                    {{-- <span
                        class="absolute top-3 left-3 bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">PERMATA
                        NUSANTARA</span> --}}
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2">Yayasan Pondok Kasih Peduli Papua: Menyalakan Harapan Dari Tanah Yang
                        Terlupakan</h3>
                    <p class="text-gray-600 text-sm mb-4">Yayasan Pondok Kasih hadir untuk mengatasi kesenjangan sosial dan
                        pendidikan di wilayah terpencil Papua.</p>
                    <a href="#" class="text-green-700 font-semibold text-sm hover:underline">READ MORE →</a>
                    <p class="text-gray-400 text-xs mt-3">06 Okt 2025</p>
                </div>
            </div>

            {{-- Kartu 2 --}}
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="relative">
                    <img src="/images/banner2.jpg" alt="Berita 2" class="w-full h-48 object-cover">
                    {{-- <span
                        class="absolute top-3 left-3 bg-yellow-600 text-white text-xs font-semibold px-3 py-1 rounded-full">UNCATEGORIZED</span> --}}
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2">Yayasan Pondok Kasih dan PT Global Securindo Utama Bersinergi Membangun
                        SDM Yang Berdampak</h3>
                    <p class="text-gray-600 text-sm mb-4">Kolaborasi untuk meningkatkan kualitas sumber daya manusia dalam
                        bidang sosial dan pendidikan.</p>
                    <a href="#" class="text-green-700 font-semibold text-sm hover:underline">READ MORE →</a>
                    <p class="text-gray-400 text-xs mt-3">05 Agu 2025</p>
                </div>
            </div>

            {{-- Kartu 3 --}}
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="relative">
                    <img src="/images/banner3.jpg" alt="Berita 3" class="w-full h-48 object-cover">
                    {{-- <span
                        class="absolute top-3 left-3 bg-green-700 text-white text-xs font-semibold px-3 py-1 rounded-full">TAMAN
                        BHINNEKA (NDC)</span> --}}
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold mb-2">Soft Opening Taman Bhinneka: Wisata Toleransi dan Simbol Keberagaman
                        di Kota Pahlawan</h3>
                    <p class="text-gray-600 text-sm mb-4">Festival tahunan yang memperingati Hari Kebangkitan Nasional
                        dengan semangat persatuan.</p>
                    <a href="#" class="text-green-700 font-semibold text-sm hover:underline">READ MORE →</a>
                    <p class="text-gray-400 text-xs mt-3">21 Mei 2025</p>
                </div>
            </div>
        </div>

        {{-- Tombol Bawah --}}
        <div class="flex justify-center mt-10">
            <a href="#" class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-full font-semibold">
                Berita YPK Lainnya
            </a>
        </div>
    </section>

    <footer class="relative bg-gradient-to-b from-emerald-800 via-green-700 to-emerald-900 text-gray-300 py-16 px-6 md:px-16 overflow-hidden">
    {{-- Efek gradasi atas --}}
    <div class="absolute top-0 left-0 w-full h-8 bg-gradient-to-b from-emerald-950/40 to-transparent"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 relative z-10">
        {{-- Logo Pondok Kasih --}}
        <div class="flex flex-col items-start">
            <img src="/images/logo.png" alt="Yayasan Pondok Kasih" class="w-40 mb-3">
            {{-- <p class="text-sm text-gray-200 leading-relaxed">
                Yayasan Pondok Kasih berdiri sejak 1991 sebagai lembaga sosial dan kemanusiaan
                yang berfokus pada pelayanan kasih bagi sesama.
            </p> --}}
        </div>

        {{-- Kontak --}}
        <div>
            <h3 class="text-gray-100 font-bold uppercase text-sm mb-3">Kontak</h3>
            <p class="text-sm">Telepon: (+62) 318 415 205</p>
            <p class="text-sm mt-1">E-mail: infocenter@pondokkasih.org</p>
        </div>

        {{-- Social Links --}}
        <div>
            <h3 class="text-gray-100 font-bold uppercase text-sm mb-4">Connect With Us</h3>
            <div class="flex flex-wrap gap-3">
                <!-- Facebook -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-900 hover:bg-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24" class="w-5 h-5 text-white">
                        <path
                            d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.2 3-3.2.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12z"/>
                    </svg>
                </a>

                <!-- X / Twitter -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-900 hover:bg-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24" class="w-5 h-5 text-white">
                        <path
                            d="M17.71 3H20l-5.46 6.23L21 21h-5.86l-4.6-6.47L5.26 21H3l5.83-6.65L3 3h5.86l4.19 5.9L17.71 3zM16.9 19h1.57L7.16 5h-1.6L16.9 19z"/>
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-900 hover:bg-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24" class="w-5 h-5 text-white">
                        <path
                            d="M10 15l5.19-3L10 9v6zm12-3c0 2.1-.1 3.4-.3 4.3-.2.9-.5 1.6-1.1 2.2-.6.6-1.3.9-2.2 1.1C17.4 20.9 16.1 21 14 21H10c-2.1 0-3.4-.1-4.3-.3-.9-.2-1.6-.5-2.2-1.1-.6-.6-.9-1.3-1.1-2.2C2.1 15.4 2 14.1 2 12c0-2.1.1-3.4.3-4.3.2-.9.5-1.6 1.1-2.2.6-.6 1.3-.9 2.2-1.1C6.6 4.1 7.9 4 10 4h4c2.1 0 3.4.1 4.3.3.9.2 1.6.5 2.2 1.1.6.6.9 1.3 1.1 2.2.2.9.3 2.2.3 4.3z"/>
                    </svg>
                </a>

                <!-- TikTok -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-900 hover:bg-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24" class="w-5 h-5 text-white">
                        <path
                            d="M16 8.04c1.2.9 2.6 1.42 4.13 1.46v-2.6a4.9 4.9 0 0 1-2.9-1v8.06a6.7 6.7 0 1 1-5.9-6.6v2.7a3.7 3.7 0 1 0 3 3.64V3h1.7v5.04z"/>
                    </svg>
                </a>

                <!-- Threads -->
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-emerald-900 hover:bg-green-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24" class="w-5 h-5 text-white">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h.26c5.19-.14 9.52-4.45 9.74-9.65C22.26 6.96 17.86 2.36 12 2zm.14 16.32c-2.79 0-4.38-1.44-4.38-3.73 0-1.94 1.45-3.6 3.5-3.6.78 0 1.46.16 2.05.48-.04-.75-.2-1.4-.47-1.97a2.62 2.62 0 0 0-2.29-1.3c-1.22 0-2.27.74-2.69 1.85L5.9 9.9a5.07 5.07 0 0 1 4.72-3.17c3.23 0 5.26 2.5 5.26 6.43v.48c0 2.59-1.5 4.68-3.74 4.68z"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Lokasi --}}
        <div>
            <h3 class="text-white font-bold uppercase text-sm mb-4">Lokasi:</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="text-gray-100 font-semibold mb-2 whitespace-nowrap">
                        Sekretariat
                    </h4>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Jl. Kendangsari II/82, Surabaya,<br>
                        Jawa Timur, Indonesia.
                    </p>
                </div>
                <div>
                    <h4 class="text-gray-100 font-semibold mb-2 whitespace-nowrap">
                        One Stop Transformasi Center
                    </h4>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Jl. Medokan Keputih No. 29, Surabaya,<br>
                        Jawa Timur, Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Divider --}}
    <div class="border-t border-green-600 mt-12 pt-6 text-center text-xs text-gray-200 relative z-10">
        <p>© 1991-2025 Yayasan Pondok Kasih. Dibuat dengan kasih.</p>
    </div>
</footer>



</x-app-layout>
