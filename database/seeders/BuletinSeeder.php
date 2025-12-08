<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buletin;

class BuletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar Kategori
        $categories = [
            'Buletin Bulanan',
            'Laporan Tahunan',
            'Laporan Kegiatan',
            'Profil Organisasi'
        ];

        // Kita buat loop untuk mengisi setiap kategori dengan 4 data dummy
        foreach ($categories as $category) {
            for ($i = 1; $i <= 4; $i++) {
                
                // Menentukan Judul Dummy berdasarkan kategori
                $title = "";
                if ($category == 'Buletin Bulanan') {
                    $bulan = ['Januari', 'Februari', 'Maret', 'April'];
                    $title = "Buletin Edisi " . $bulan[$i-1] . " 2025";
                } elseif ($category == 'Laporan Tahunan') {
                    $tahun = 2024 - ($i-1);
                    $title = "Laporan Tahunan YPK Tahun $tahun";
                } else {
                    $title = "$category - Judul Kegiatan Ke-$i";
                }

                Buletin::create([
                    'title'    => $title,
                    'category' => $category,
                    // Kita set path gambar dummy. 
                    // Nanti pastikan ada file gambar di storage agar tidak broken image.
                    // Atau biarkan null jika ingin mengetes kondisi "No Image"
                    'image'    => '/images/buletin_dummy.jpg', 
                    'link'     => 'https://google.com', // Link dummy ke Google
                ]);
            }
        }
    }
}