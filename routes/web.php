<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Models\Program;

Route::get('/', function () {
    $programs = Program::latest()->take(3)->get();
    return view('index', compact('programs'));
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
Route::resource('program', ProgramController::class);
// Route::get('/program', function () {
//     return view('tentang.program.index');
// });

// Route::get('/berita', function () {
//     return view('terhubung.berita');
// });
Route::resource('berita', BeritaController::class)
    ->parameters(['berita' => 'berita']);
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
