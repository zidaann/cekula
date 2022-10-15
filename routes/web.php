<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Admin\JadwalSekolahController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});



Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::prefix('akademik')->group(function(){
    Route::get('jadwal-sekolah', [JadwalSekolahController::class, 'index'])->name('jadwal_sekolah.index');
    Route::get('create-jadwal-sekolah', [JadwalSekolahController::class, 'create'])->name('jadwal_sekolah.create');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/detail', function() {
    return view('dashboard.jadwalKelas.detailJadwal');
});

require __DIR__.'/auth.php';
