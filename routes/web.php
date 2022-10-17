<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JadwalKelasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\PresensiPegawaiController;
use App\Http\Controllers\Dashboard\Admin\JadwalSekolahController;


Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest');



Route::get('register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('akademik')->group(function(){
    Route::prefix('jadwal-sekolah')->group(function(){
        Route::get('', [JadwalSekolahController::class, 'index'])->name('jadwal_sekolah.index');
        Route::get('create', [JadwalSekolahController::class, 'create'])->name('jadwal_sekolah.create');
        // Route::get('create', [JadwalSekolahController::class, 'store'])->name('jadwal_sekolah.store');
        Route::get('edit', [JadwalSekolahController::class, 'edit'])->name('jadwal_sekolah.edit');
    });

    Route::prefix('jadwal-kelas')->group(function(){
        Route::get('', [JadwalKelasController::class, 'index'])->name('jadwal_kelas.index');
        Route::get('create', [JadwalKelasController::class, 'create'])->name('jadwal_kelas.create');
        // Route::get('create', [JadwalKelasController::class, 'store'])->name('jadwal_kelas.store');
        Route::get('edit', [JadwalKelasController::class, 'edit'])->name('jadwal_kelas.edit');
        // Route::put('edit', [JadwalKelasController::class, 'update']);
        Route::get('detail-jadwal', [JadwalKelasController::class, 'show'])->name('jadwal_kelas.show');
    });
});


Route::prefix('presensi')->group(function(){
    Route::prefix('pegawai')->group(function(){
        Route::get('', [PresensiPegawaiController::class, 'index'])->name('presensi.pegawai.index');
        Route::get('create', [PresensiPegawaiController::class, 'create'])->name('presensi.pegawai.create');
        // Route::post('create', [PresensiPegawaiController::class, 'store'])->name('presensi.store');
        Route::get('edit', [PresensiPegawaiController::class, 'edit'])->name('presensi.pegawai.edit');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
