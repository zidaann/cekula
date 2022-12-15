<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BeritaKelasController;
use App\Http\Controllers\API\BeritaSekolahController;
use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\FasilitasController;
use App\Http\Controllers\Api\HariController;
use App\Http\Controllers\Api\JadwalKelasController;
use App\Http\Controllers\Api\JadwalSekolahController;
use App\Http\Controllers\Api\KategoriBukuController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\Api\PPDBController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // User
    Route::get('/user', [AuthController::class, 'user']);//get user details
    Route::get('/user/multistatus/murid', [AuthController::class, 'murid']);//get semua user dengan status murid dan osis
    Route::get('/user/multistatus/pegawai', [AuthController::class, 'pegawai']);//get semua user dengan status pegawai
    Route::get('/user/status/{status}', [AuthController::class, 'statusshow']);
    Route::get('/user/kelas/{kelas_id}', [AuthController::class, 'kelasshow']);
    Route::get('/user/user/{username}', [AuthController::class, 'usernameshow']); 
    Route::put('/user', [AuthController::class, 'update']);
    Route::put('/user/role/{id}', [AuthController::class, 'updaterole']); //update role
    Route::put('/user/kelas/{id}', [AuthController::class, 'updatekelas']); //update kelas
    Route::put('/user/status/{id}', [AuthController::class, 'updatestatus']); //update kelas
    Route::post('/logout', [AuthController::class, 'logout']);

    // Berita Sekolah
    Route::get('/beritasekolah', [BeritaSekolahController::class, 'index']); // all posts
    Route::post('/beritasekolah', [BeritaSekolahController::class, 'store']); // create post
    Route::get('/beritasekolah/{id}', [BeritaSekolahController::class, 'show']); // get single post 
    Route::put('/beritasekolah/{id}', [BeritaSekolahController::class, 'update']); // update post
    Route::delete('/beritasekolah/{id}', [BeritaSekolahController::class, 'destroy']); // delete post

    // Berita Kelas
    Route::get('/beritakelas', [BeritaKelasController::class, 'index']); // all posts
    Route::post('/beritakelas', [BeritaKelasController::class, 'store']); // create post
    Route::get('/beritakelas/{id}', [BeritaKelasController::class, 'show']); // get single post
    Route::get('/beritakelas/user/{id}', [BeritaKelasController::class, 'usershow']); // get single post by id_user 
    Route::put('/beritakelas/{id}', [BeritaKelasController::class, 'update']); // update post
    Route::delete('/beritakelas/{id}', [BeritaKelasController::class, 'destroy']); // delete post

    // Jadwal Sekolah
    Route::get('/jadwalsekolah', [JadwalSekolahController::class, 'index']); // all posts
    Route::post('/jadwalsekolah', [JadwalSekolahController::class, 'store']); // create post
    Route::get('/jadwalsekolah/{id}', [JadwalSekolahController::class, 'show']); // get single post
    Route::put('/jadwalsekolah/{id}', [JadwalSekolahController::class, 'update']); // update post
    Route::delete('/jadwalsekolah/{id}', [JadwalSekolahController::class, 'destroy']); // delete post

    // Kegiatan OSIS
    Route::get('/kegiatanosis', [KegiatanOsisController::class, 'index']); // all posts
    Route::post('/kegiatanosis', [KegiatanOsisController::class, 'store']); // create post
    Route::get('/kegiatanosis/{id}', [KegiatanOsisController::class, 'show']); // get single post
    Route::get('/kegiatanosis/user/{id}', [KegiatanOsisControlleroller::class, 'usershow']); // get single post by id_user 
    Route::put('/kegiatanosis/{id}', [KegiatanOsisController::class, 'update']); // update post
    Route::delete('/kegiatanosis/{id}', [KegiatanOsisController::class, 'destroy']); // delete post

    // Ekstrakurikuler
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']); // all posts
    Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store']); // create post
    Route::get('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'show']); // get single post
    Route::get('/ekstrakurikuler/user/{id}', [EkstrakurikulerControlleroller::class, 'usershow']); // get single post by id_user 
    Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update']); // update post
    Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy']); // delete post

    // Kelas
    Route::get('/kelas', [KelasController::class, 'index']); // all posts
    Route::post('/kelas', [KelasController::class, 'store']); // create post
    Route::get('/kelas/{id}', [KelasController::class, 'show']); // get single post
    Route::get('/kelas/tingkat/{tingkat_kelas}', [KelasController::class, 'tingkatshow']); // get all post by filter tingkat_kelas
    Route::get('/kelas/user/{id}', [KelasController::class, 'usershow']); // get single post by id_user 
    Route::put('/kelas/{id}', [KelasController::class, 'update']); // update post
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy']); // delete post

    // Mata Pelajaran
    Route::get('/matapelajaran', [MapelController::class, 'index']); // all posts
    Route::post('/matapelajaran', [MapelController::class, 'store']); // create post
    Route::get('/matapelajaran/{id}', [MapelController::class, 'show']); // get single post
    Route::put('/matapelajaran/{id}', [MapelController::class, 'update']); // update post
    Route::delete('/matapelajaran/{id}', [MapelController::class, 'destroy']); // delete post

    // Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'index']); // all posts
    Route::post('/fasilitas', [FasilitasController::class, 'store']); // create post
    Route::get('/fasilitas/{id}', [FasilitasController::class, 'show']); // get single post
    Route::get('/fasilitas/kategori/{kategori}', [FasilitasController::class, 'kategorishow']); // get all post by filter tingkat_kelas
    Route::put('/fasilitas/{id}', [FasilitasController::class, 'update']); // update post
    Route::delete('/fasilitas/{id}', [FasilitasController::class, 'destroy']); // delete post

    // Buku
    Route::get('/buku', [BukuController::class, 'index']); // all posts
    Route::post('/buku', [BukuController::class, 'store']); // create post
    Route::get('/buku/{id}', [BukuController::class, 'show']); // get single post
    Route::get('/buku/kategori/{kategori}', [BukuController::class, 'kategorishow']); // get all post by filter tingkat_kelas
    Route::put('/buku/{id}', [BukuController::class, 'update']); // update post
    Route::delete('/buku/{id}', [BukuController::class, 'destroy']); // delete post

    // Siswa
    Route::get('/siswa', [SiswaController::class, 'index']); // all posts
    Route::post('/siswa', [SiswaController::class, 'store']); // create post
    Route::get('/siswa/{id}', [SiswaController::class, 'show']); // get single post   
    Route::get('/siswa/user/{id}', [SiswaController::class, 'usershow']); // get single post by id_user 
    Route::get('/siswa/jenis/{jenis}', [SiswaController::class, 'jenisshow']); // get all post by filter tingkat_kelas
    Route::put('/siswa/{id}', [SiswaController::class, 'update']); // update post
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']); // delete post

    // Jadwal Kelas
    Route::get('/jadwalkelas', [JadwalKelasController::class, 'index']); // all posts
    Route::post('/jadwalkelas', [JadwalKelasController::class, 'store']); // create post
    Route::get('/jadwalkelas/{id}', [JadwalKelasController::class, 'show']); // get single post
    Route::get('/jadwalkelas/kelas/{id}', [JadwalKelasController::class, 'kelasshow']); // get single post
    Route::put('/jadwalkelas/{id}', [JadwalKelasController::class, 'update']); // update post
    Route::delete('/jadwalkelas/{id}', [JadwalKelasController::class, 'destroy']); // delete post

    // Hari
    Route::get('/hari', [HariController::class, 'index']); // all posts

    // Kategori Buku
    Route::get('/kategoribuku', [KategoriBukuController::class, 'index']); // all posts

    // PPDB
    Route::get('/ppdb', [PPDBController::class, 'index']); // all posts
    Route::post('/ppdb', [PpdbController::class, 'store']); // create post
    Route::get('/ppdb/{user_id}', [PpdbController::class, 'show']); // get single post by user_id
    Route::put('/ppdb/{id}', [PpdbController::class, 'update']); // update post
    Route::delete('/ppdb/{id}', [PpdbController::class, 'destroy']); // delete post

    //Produk Koperasi
    Route::get('/produkkoperasi', [ProdukKoperasiController::class, 'index']); // all posts
    Route::post('/produkkoperasi', [ProdukKoperasiController::class, 'store']); // create post
    Route::get('/produkkoperasi/{user_id}', [ProdukKoperasiController::class, 'show']); // get single post by user_id
    Route::put('/produkkoperasi/{id}', [ProdukKoperasiController::class, 'update']); // update post
    Route::delete('/produkkoperasi/{id}', [ProdukKoperasiController::class, 'destroy']); // delete post

    //Kartu Pelajar
    Route::get('/kartupelajar', [KartuPelajarController::class, 'index']); // all posts
    Route::post('/kartupelajar', [KartuPelajarController::class, 'store']); // create post
    Route::get('/kartupelajar/{user_id}', [KartuPelajarController::class, 'show']); // get single post by user_id
    Route::get('/kartupelajar/kelas/{kelas_id}', [KartuPelajarController::class, 'showbykelas']); // get single post by user_id
    Route::put('/kartupelajar/{id}', [KartuPelajarController::class, 'update']); // update post
    Route::delete('/kartupelajar/{id}', [KartuPelajarController::class, 'destroy']); // delete post

    //Presensi Pegawai
    Route::get('/presensipegawai', [PresensiPegawaiController::class, 'index']); // all posts
    Route::post('/presensipegawai', [PresensiPegawaiController::class, 'store']); // create post
    Route::get('/presensipegawai/{user_id}', [PresensiPegawaiController::class, 'show']); // get single post by user_id
    Route::put('/presensipegawai/{id}', [PresensiPegawaiController::class, 'update']); // update post
    Route::delete('/presensipegawai/{id}', [PresensiPegawaiController::class, 'destroy']); // delete post

    //Penilaian Ekstrakurikuler
    Route::get('/penilaianekstrakurikuler', [PenilaianEkstrakurikulerController::class, 'index']); // all posts
    Route::post('/penilaianekstrakurikuler', [PenilaianEkstrakurikulerController::class, 'store']); // create post
    Route::get('/penilaianekstrakurikuler/{user_id}', [PenilaianEkstrakurikulerController::class, 'show']); // get single post by user_id
    Route::put('/penilaianekstrakurikuler/{id}', [PenilaianEkstrakurikulerController::class, 'update']); // update post
    Route::delete('/penilaianekstrakurikuler/{id}', [PenilaianEkstrakurikulerController::class, 'destroy']); // delete post

    // Peminjaman Fasilitas
    Route::get('/peminjamanfasilitas', [PeminjamanFasilitasController::class, 'index']); // all posts
    Route::post('/peminjamanfasilitas', [PeminjamanFasilitasController::class, 'store']); // create post
    Route::get('/peminjamanfasilitas/{id}', [PeminjamanFasilitasController::class, 'show']); // get single post
    Route::put('/peminjamanfasilitas/{id}', [PeminjamanFasilitasController::class, 'update']); // update post
    Route::delete('/peminjamanfasilitas/{id}', [PeminjamanFasilitasController::class, 'destroy']); // delete post

    // Comment
    Route::get('/posts/{id}/comments', [CommentController::class, 'index']); // all comments of a post
    Route::post('/posts/{id}/comments', [CommentController::class, 'store']); // create comment on a post
    Route::put('/comments/{id}', [CommentController::class, 'update']); // update a comment
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']); // delete a comment

    // Like
    Route::post('/posts/{id}/likes', [LikeController::class, 'likeOrUnlike']); // like or dislike back a post

});
