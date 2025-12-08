<?php

namespace App\Http\Controllers;

use App\Models\Buletin;
use Illuminate\Http\Request;

class BuletinController extends Controller
{
    // 1. Halaman Utama (Index)
    public function index()
    {
        // Ambil 4 data terbaru per kategori
        $monthly = Buletin::where('category', 'Buletin Bulanan')->latest()->take(4)->get();
        $annual  = Buletin::where('category', 'Laporan Tahunan')->latest()->take(4)->get();
        $event   = Buletin::where('category', 'Laporan Kegiatan')->latest()->take(4)->get();
        $profile = Buletin::where('category', 'Profil Organisasi')->latest()->take(4)->get();

        return view('terhubung.buletin.index', compact('monthly', 'annual', 'event', 'profile'));
    }

    // 2. Halaman Lihat Semua per Kategori (Show)
    // Di sini $id bukan angka ID, tapi string "Nama Kategori"
    public function show($id)
    {
        // $id berisi misal: "Buletin Bulanan" atau "Laporan Tahunan"
        // Kita gunakan urldecode jaga-jaga ada karakter spasi (%20)
        $category = urldecode($id); 
        
        // Ambil semua data berdasarkan kategori tersebut
        $items = Buletin::where('category', $category)->latest()->paginate(12);

        // Return ke view yang sama (show.blade.php)
        return view('terhubung.buletin.show', compact('items', 'category'));
    }
}