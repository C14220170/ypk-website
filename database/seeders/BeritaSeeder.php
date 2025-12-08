<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'title' => 'Program Bantuan Sembako untuk Warga',
                'description' => 'Yayasan Pondok Kasih menyalurkan bantuan sembako kepada warga kurang mampu sebagai bentuk kasih dan kepedulian.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pendidikan Gratis Anak Putus Sekolah',
                'description' => 'Program Rumah Belajar Kasih memberikan akses pendidikan gratis bagi anak-anak putus sekolah di berbagai daerah.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Renovasi Rumah Tidak Layak Huni',
                'description' => 'Relawan bersama masyarakat melakukan renovasi rumah tidak layak huni demi menciptakan lingkungan yang lebih layak.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Kunjungan Kasih ke Panti Jompo',
                'description' => 'Relawan YPK mengadakan kunjungan kasih untuk memberikan perhatian dan sukacita kepada para lansia.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pelayanan Medis Gratis',
                'description' => 'Program pelayanan kesehatan gratis kembali diadakan, memberikan pemeriksaan kesehatan bagi masyarakat kurang mampu.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Aksi Penanaman Pohon',
                'description' => 'Dalam upaya pelestarian lingkungan, relawan menanam ratusan pohon di wilayah yang mengalami degradasi.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Program Bantuan Sembako untuk Warga',
                'description' => 'Yayasan Pondok Kasih menyalurkan bantuan sembako kepada warga kurang mampu sebagai bentuk kasih dan kepedulian.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pendidikan Gratis Anak Putus Sekolah',
                'description' => 'Program Rumah Belajar Kasih memberikan akses pendidikan gratis bagi anak-anak putus sekolah di berbagai daerah.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Renovasi Rumah Tidak Layak Huni',
                'description' => 'Relawan bersama masyarakat melakukan renovasi rumah tidak layak huni demi menciptakan lingkungan yang lebih layak.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Kunjungan Kasih ke Panti Jompo',
                'description' => 'Relawan YPK mengadakan kunjungan kasih untuk memberikan perhatian dan sukacita kepada para lansia.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pelayanan Medis Gratis',
                'description' => 'Program pelayanan kesehatan gratis kembali diadakan, memberikan pemeriksaan kesehatan bagi masyarakat kurang mampu.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Aksi Penanaman Pohon',
                'description' => 'Dalam upaya pelestarian lingkungan, relawan menanam ratusan pohon di wilayah yang mengalami degradasi.',
                'image' => '/images/banner1.jpg'
            ],
        ];

        foreach ($datas as $data) {
            Berita::create($data);
        }
    }
}
