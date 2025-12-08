<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Models\Program;
use App\Http\Controllers\Admin\ProgramAdminController;
use App\Http\Controllers\Admin\BeritaAdminController;

Route::get('/', function () {
    $programs = Program::latest()->take(3)->get();
    $beritas = Berita::latest()->take(3)->get();
    return view('index', compact('programs', 'beritas'));
});

Route::resource('program', ProgramController::class);
Route::resource('berita', BeritaController::class)
    ->parameters(['berita' => 'berita']);
Route::get('/donasi', function () {
    return view('dukungan.donasi');
});
Route::get('/relawan', function () {
    return view('dukungan.relawan');
});
Route::get('/sejarah', function () {
    return view('tentang.sejarah');
});
Route::get('/pengantar', function () {
    return view('tentang.pengantar');
});
Route::get('/visi-misi', function () {
    return view('tentang.visi-misi');
});
Route::get('/buletin', function () {
    return view('terhubung.buletin');
});
Route::get('/hubungi', function () {
    return view('terhubung.hubungi');
});
Route::get('/saran', function () {
    return view('terhubung.saran');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/', function () {
        $totalBerita = Berita::count();
        $totalProgram = Program::count(); // Asumsi kamu sudah buat Model Program
        
        return view('dashboard', compact('totalBerita', 'totalProgram'));
    })->name('dashboard');

    Route::resource('program', ProgramAdminController::class, [
        'as' => 'admin'
    ]);

    Route::resource('berita', BeritaAdminController::class, [
        'as' => 'admin'
    ])->parameters([
        'berita' => 'berita'
    ]);
});


require __DIR__.'/auth.php';
