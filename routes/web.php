<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\PresensiPegawaiController;
use App\Http\Controllers\Dashboard\Admin\JadwalKelasController;
use App\Http\Controllers\Dashboard\Admin\BeritaSekolahController;
use App\Http\Controllers\Dashboard\Admin\JadwalSekolahController;
use App\Http\Controllers\Dashboard\Admin\PeminjamanFasilitasController;
use App\Http\Controllers\Dashboard\Admin\PresensiMuridController;
use App\Http\Controllers\JadwalKelasController as ControllersJadwalKelasController;

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest');
Route::get('/beritasekolah', function () {
    return view('dashboard.berita.berita_sekolah.index');
});


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
        // Route::post('create', [PresensiPegawaiController::class, 'store'])->name('presensi.pegawai.store');
        Route::get('edit', [PresensiPegawaiController::class, 'edit'])->name('presensi.pegawai.edit');
    });
    Route::prefix('murid')->group(function(){
        Route::get('', [PresensiMuridController::class, 'index'])->name('presensi.murid.index');
        Route::get('create', [PresensiMuridController::class, 'create'])->name('presensi.murid.create');
        // Route::post('create', [PresensiMuridController::class, 'store'])->name('presensi.murid.store');
        Route::get('edit', [PresensiMuridController::class, 'edit'])->name('presensi.murid.edit');
        Route::get('show', [PresensiMuridController::class, 'show'])->name('presensi.murid.show');
    });
});

Route::prefix('berita')->group(function(){
    Route::prefix('sekolah')->group(function(){
        Route::get('', [BeritaSekolahController::class, 'index'])->name('berita.sekolah.index');
        Route::get('create', [BeritaSekolahController::class, 'create'])->name('berita.sekolah.create');
        Route::get('edit', [BeritaSekolahController::class, 'edit'])->name('berita.sekolah.edit');
        Route::get('show', [BeritaSekolahController::class, 'show'])->name('berita.sekolah.show');
        // Route::get('sekolah', [BeritaSekolahController::class, 'index'])->name('berita.sekolah.index');
    });
});

Route::prefix('fasilitas')->group(function(){
    Route::prefix('peminjaman-fasilitas')->group(function(){
        Route::get('', [PeminjamanFasilitasController::class, 'index'])->name('fasilitas.peminjaman.index');
        Route::get('create', [PeminjamanFasilitasController::class, 'create'])->name('fasilitas.peminjaman.create');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
