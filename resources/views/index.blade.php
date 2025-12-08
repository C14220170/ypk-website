<x-app-layout>

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
            @foreach ($programs as $program)
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition duration-300">
                    <img 
                        src="{{ asset($program->image) }}"
                        alt="{{ $program->title }}" 
                        class="w-full h-48 object-cover rounded-lg mb-4"
                    >

                    <h3 class="text-xl font-bold mb-2">{{ $program->title }}</h3>

                    <p class="text-gray-600 mb-4">
                        {{ Str::limit($program->description, 150) }}
                    </p>

                    <a href="{{ route('program.show', $program->id) }}" 
                    class="text-green-600 font-semibold hover:underline flex items-center">
                        Kenal lebih dekat
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>


        {{-- Tombol Bawah --}}
        <div class="flex justify-center mt-10">
            <a href="{{ route('program.index') }}" 
                class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-full font-semibold">
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

    {{-- Judul --}}
    <div class="relative z-10 text-center mb-12">
        <h3 class="text-2xl md:text-3xl font-bold tracking-wide">Yayasan Pondok Kasih Didukung Oleh</h3>
        <p class="text-white/80 mt-2 text-sm md:text-base">
            Kami berterima kasih atas dukungan para mitra yang turut berkontribusi.
        </p>
    </div>

    {{-- LOGO SLIDER RESPONSIVE --}}
    <div class="relative w-full overflow-hidden z-10">

        <div class="flex items-center gap-10 animate-logo-scroll whitespace-nowrap"
             style="--speed: 35s">

            {{-- TRACK UTAMA --}}
            @for ($looping = 1; $looping <= 2; $looping++)
                <div class="flex gap-10">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="bg-white/10 hover:bg-white/20 backdrop-blur-sm 
                                    p-4 rounded-xl transition-all duration-300 
                                    shadow-md hover:shadow-lg min-w-[140px]">

                            <img src="/images/sponsor.jpeg"
                                 alt="Sponsor"
                                 class="h-12 md:h-16 object-contain mx-auto opacity-90 group-hover:opacity-100">
                        </div>
                    @endfor
                </div>
            @endfor
        </div>

    </div>

</section>


{{-- ANIMASI LOGO --}}
<style>
    @keyframes slideLogo {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    .animate-logo-scroll {
        animation: slideLogo var(--speed) linear infinite;
    }
</style>

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

</x-app-layout>
