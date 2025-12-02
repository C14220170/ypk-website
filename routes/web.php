<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

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
Route::get('/program', function () {
    return view('tentang.program');
});

Route::get('/berita', function () {
    return view('terhubung.berita');
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
