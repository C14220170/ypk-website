<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $dummy = [
            [
                'title' => 'Program Kesehatan',
                'description' => 'Membantu masyarakat prasejahtera di bidang kesehatan.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Bantuan Pendidikan',
                'description' => 'Mendukung pendidikan anak-anak kurang mampu.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pemberdayaan Ekonomi',
                'description' => 'Melatih masyarakat untuk mandiri.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Program Kesehatan',
                'description' => 'Membantu masyarakat prasejahtera di bidang kesehatan.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Bantuan Pendidikan',
                'description' => 'Mendukung pendidikan anak-anak kurang mampu.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pemberdayaan Ekonomi',
                'description' => 'Melatih masyarakat untuk mandiri.',
                'image' => '/images/banner1.jpg'
            ],[
                'title' => 'Program Kesehatan',
                'description' => 'Membantu masyarakat prasejahtera di bidang kesehatan.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Bantuan Pendidikan',
                'description' => 'Mendukung pendidikan anak-anak kurang mampu.',
                'image' => '/images/banner1.jpg'
            ],
            [
                'title' => 'Pemberdayaan Ekonomi',
                'description' => 'Melatih masyarakat untuk mandiri.',
                'image' => '/images/banner1.jpg'
            ],
        ];

        foreach ($dummy as $program) {
            Program::create($program);
        }
    }
}
