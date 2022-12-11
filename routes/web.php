<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\PresensiPegawaiController;
use App\Http\Controllers\Dashboard\Admin\RaporMuridController;
use App\Http\Controllers\Dashboard\Admin\BeritaKelasController;
use App\Http\Controllers\Dashboard\Admin\JadwalKelasController;
use App\Http\Controllers\Dashboard\Admin\PerpustakaanController;
use App\Http\Controllers\Dashboard\Admin\BeritaSekolahController;
use App\Http\Controllers\Dashboard\Admin\DaftarFasilitasController;
use App\Http\Controllers\Dashboard\Admin\JadwalSekolahController;
use App\Http\Controllers\Dashboard\Admin\PresensiMuridController;
use App\Http\Controllers\Dashboard\Admin\PeminjamanFasilitasController;
use App\Http\Controllers\Dashboard\Admin\PeminjamanPerpustakaanController;
use App\Http\Controllers\Dashboard\Admin\TambahSumbangBukuController;
use App\Http\Controllers\JadwalKelasController as ControllersJadwalKelasController;

Route::get("/", function () {
    return view("home");
})->name("home")->middleware("guest");
Route::get("/beritasekolah", function () {
    return view("dashboard.berita.berita_sekolah.index");
});

Route::get("/coba", function () {
    return view("dashboard.administrasi.keuangan.pemasukan_pengeluaran.index");
});

Route::get("register", [RegisterController::class, "create"])->name("register")->middleware("guest");
Route::post("register", [RegisterController::class, "store"]);

Route::get("login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("login", [LoginController::class, "store"]);
Route::get("logout", [LoginController::class, "logout"])->name("logout");
Route::post("logout", [LoginController::class, "logout"])->name("logout");

Route::middleware('auth')->prefix('akademik')->group(function(){
    Route::prefix("jadwal-sekolah")->group(function () {
        Route::get("", [JadwalSekolahController::class, "index"])->name("jadwal_sekolah.index");
        Route::get("create", [JadwalSekolahController::class, "create"])->name("jadwal_sekolah.create");
        Route::post("create", [JadwalSekolahController::class, "store"])->name("jadwal_sekolah.create");
        Route::get("{jadwalSekolah}/edit", [JadwalSekolahController::class,"edit",])->name("jadwal_sekolah.edit");
        Route::put("{jadwalSekolah}/edit", [JadwalSekolahController::class,"update",]);
        Route::get("{jadwalSekolah}/show", [JadwalSekolahController::class,"show",])->name("jadwal_sekolah.show");
        Route::delete("{jadwalSekolah}", [JadwalSekolahController::class,"destroy",])->name("jadwal_sekolah.delete");
    });

    Route::prefix("jadwal-kelas")->group(function () {
        Route::get("", [JadwalKelasController::class, "index"])->name("jadwal_kelas.index");
        Route::get("create", [JadwalKelasController::class, "create"])->name("jadwal_kelas.create");
        Route::post('create', [JadwalKelasController::class, 'store']);
        Route::get("{jadwalKelas}/edit", [JadwalKelasController::class, "edit"])->name("jadwal_kelas.edit");
        Route::put("{id}/edit", [JadwalKelasController::class, "update"]);
        Route::get("{kelas}/show", [JadwalKelasController::class,"show"])->name("jadwal_kelas.show");
        Route::delete("{id}", [JadwalKelasController::class,"destroy"])->name("jadwal_kelas.delete");
    });

    Route::prefix("raport-murid")->group(function () {
        Route::get("", [RaporMuridController::class, "index"])->name("rapor.index");
        Route::get("detail-rapor", [RaporMuridController::class,"detailRapor",])->name("rapor.detailRapor");
    });
});


Route::prefix("presensi")->group(function () {
    Route::prefix("pegawai")->group(function () {
        Route::get("", [PresensiPegawaiController::class, "index"])->name("presensi.pegawai.index");
        Route::get("create", [PresensiPegawaiController::class,"create",])->name("presensi.pegawai.create");
        // Route::post('create', [PresensiPegawaiController::class, 'store'])->name('presensi.pegawai.store');
        Route::get("edit", [PresensiPegawaiController::class, "edit"])->name("presensi.pegawai.edit");
    });
    Route::prefix("murid")->group(function () {
        Route::get("", [PresensiMuridController::class, "index"])->name("presensi.murid.index");
        Route::get("create", [PresensiMuridController::class, "create"])->name("presensi.murid.create");
        // Route::post('create', [PresensiMuridController::class, 'store'])->name('presensi.murid.store');
        Route::get("edit", [PresensiMuridController::class, "edit"])->name("presensi.murid.edit");
        Route::get("show", [PresensiMuridController::class, "show"])->name("presensi.murid.show");
    });
});

Route::prefix("berita")->group(function () {
    Route::prefix("sekolah")->group(function () {
        Route::get("", [BeritaSekolahController::class, "index"])->name(
            "berita_sekolah.index"
        );
        Route::get("create", [BeritaSekolahController::class, "create"])->name(
            "berita_sekolah.create"
        );
        Route::post("create", [BeritaSekolahController::class, "store"]);
        Route::get("{beritaSekolah}/edit", [BeritaSekolahController::class, "edit"])->name(
            "berita_sekolah.edit"
        );
        Route::put("{beritaSekolah}/edit", [BeritaSekolahController::class, "update"]);
        Route::get("{beritaSekolah}/show", [BeritaSekolahController::class, "show"])->name(
            "berita_sekolah.show"
        );
        Route::delete("{beritaSekolah}", [BeritaSekolahController::class, "destroy"])->name(
            "berita_sekolah.delete"
        );
    });
    Route::prefix('kelas')->group(function(){
        Route::get('', [BeritaKelasController::class, 'index'])->name('berita_kelas.index');
        Route::get('create', [BeritaKelasController::class, 'create'])->name('berita_kelas.create');
        Route::post('create', [BeritaKelasController::class, 'store']);
        Route::get('{beritaKelas}/edit', [BeritaKelasController::class, 'edit'])->name('berita_kelas.edit');
        Route::put('{beritaKelas}/edit', [BeritaKelasController::class, 'update']);
        Route::get('{beritaKelas}/show', [BeritaKelasController::class, 'show'])->name('berita_kelas.show');
        Route::delete('{beritaKelas}', [BeritaKelasController::class, 'destroy'])->name('berita_kelas.delete');
    });
});

Route::prefix("fasilitas")->group(function () {
    Route::prefix("peminjaman-fasilitas")->group(function () {
        Route::get("", [PeminjamanFasilitasController::class, "index"])->name("fasilitas.peminjaman.index"
        );
        Route::get("create", [PeminjamanFasilitasController::class,"create",])->name("fasilitas.peminjaman.create");
        Route::get("edit", [PeminjamanFasilitasController::class,"edit",])->name("fasilitas.peminjaman.edit");
    });

    Route::prefix("perpustakaan")->group(function () {
        Route::get("", [PerpustakaanController::class, "index"])->name("perpustakaan.index");
        Route::prefix("peminjaman")->group(function () {
            Route::get("create", [PeminjamanPerpustakaanController::class,"create",])->name("perpustakaan.pinjam.create");
        });
        Route::prefix('tambah-sumbang')->group(function(){
            Route::get('', [TambahSumbangBukuController::class, 'index'])->name('tambah_sumbang.index');
            Route::get('create', [TambahSumbangBukuController::class, 'create'])->name('tambah_sumbang.create');
            Route::post('create', [TambahSumbangBukuController::class, 'store']);
            Route::get('{slug}/edit', [TambahSumbangBukuController::class, 'edit'])->name('tambah_sumbang.edit');
            Route::put('{slug}/edit', [TambahSumbangBukuController::class, 'update']);
            Route::delete('{id}', [TambahSumbangBukuController::class, 'destroy'])->name('tambah_sumbang.delete');
        });
    });
    Route::prefix("daftar-fasilitas")->group(function () {
        Route::get("", [DaftarFasilitasController::class, "index"])->name('daftar_fasilitas.index');
        Route::get("create", [DaftarFasilitasController::class, "create"])->name('daftar_fasilitas.create');
        Route::post("create", [DaftarFasilitasController::class, "store"]);
        Route::delete("{id}", [DaftarFasilitasController::class, "destory"])->name('daftar_fasilitas.delete');
        Route::prefix('barang')->group(function(){
            Route::get("{id}/edit", [DaftarFasilitasController::class, "editBarang"])->name('barang.edit');
            Route::put("{id}/edit", [DaftarFasilitasController::class, "updateBarang"]);
        });
        Route::prefix('ruangan')->group(function(){
            Route::get("{id}/edit", [DaftarFasilitasController::class, "editRuangan"])->name('ruangan.edit');
            Route::put("{id}/update", [DaftarFasilitasController::class, "updateRuangan"]);
        });
    });

});

Route::get("/dashboard", function () {
    return view("dashboard.dashboard");
})->middleware(["auth", "verified"])->name("dashboard");

require __DIR__ . "/auth.php";
