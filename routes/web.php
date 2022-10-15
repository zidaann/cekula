<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JadwalKelasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\Admin\JadwalSekolahController;


Route::get('/', function () {
    return view('home');
});



Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::prefix('akademik')->group(function(){
    Route::prefix('jadwal-sekolah')->group(function(){
        Route::get('', [JadwalSekolahController::class, 'index'])->name('jadwal_sekolah.index');
        Route::get('create', [JadwalSekolahController::class, 'create'])->name('jadwal_sekolah.create');
        Route::get('edit', [JadwalSekolahController::class, 'edit'])->name('jadwal_sekolah.edit');
    });

    Route::prefix('jadwal-kelas')->group(function(){
        Route::get('', [JadwalKelasController::class, 'index'])->name('jadwal_kelas.index');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/detail', function() {
    return view('dashboard.akademik.jadwal_kelas.detailJadwal');
});

require __DIR__.'/auth.php';
