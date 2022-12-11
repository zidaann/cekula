<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Buku;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TambahSumbangBukuRequest;
use App\Models\KategoriBuku;

class TambahSumbangBukuController extends Controller
{
    public function index (){
        // $bukus = Buku::select('id', 'judul_buku', 'kategori_id', 'pengarang', 'penerbit', 'tahun_terbit', 'kota_terbit', 'nama_penyumbang', 'tgl_sumbang')->get();
        $bukus = Buku::with('kategori_buku')->select('id', 'judul_buku', 'slug','kategori_id', 'pengarang', 'penerbit', 'tahun_terbit', 'kota_terbit', 'nama_penyumbang', 'id_penyumbang', 'status_buku','tgl_sumbang')->get();
       return view('dashboard.fasilitas.perpustakaan.sumbang_buku.index', compact('bukus')); 
    }

    public function create (Buku $buku){
        $submit = "Buat Data";
        $kategoris = KategoriBuku::select('id', 'nama')->get();
       return view('dashboard.fasilitas.perpustakaan.sumbang_buku.create', compact('kategoris', 'buku', 'submit')); 
    }

    public function store (TambahSumbangBukuRequest $request){
        // dd($request->all());
        Buku::create([
            'judul_buku' => $request->judul_buku,
            'slug' => Str::slug($request->judul_buku, '-'),
            'kategori_id' => $request->kategori_id,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kota_terbit' => $request->kota_terbit,
            'status_buku' => $request->status_buku,
            'nama_penyumbang' => $request->nama_penyumbang ?? '-',
            'id_penyumbang' => $request->id_penyumbang ?? '-',
            'tgl_sumbang' => $request->tgl_sumbang ?? null,
        ]);
        Alert::image('Buku Berhasil Diunggah', 'Silahkan kembali ke halaman Tambah dan Sumbang Buku' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('tambah_sumbang.index'));
    }

    public function edit ($slug){
        $buku = Buku::where('slug', $slug)->first();
        $kategoris = KategoriBuku::all();
        $submit = "Simpan Perubahan";
        return view('dashboard.fasilitas.perpustakaan.sumbang_buku.edit', compact('buku', 'kategoris', 'submit'));
    }

    public function update (TambahSumbangBukuRequest $request, $slug){
        // dd($request->all());
        // $request['slug'] = Str::slug($request->judul_buku, '');
        // ================ ID PENYUMBANG DAN STATUS TIDAK TERUPDATE
        Buku::where('slug', $slug)->update([
            'judul_buku' => $request->judul_buku,
            'slug' => Str::slug($request->judul_buku, '-'),
            'kategori_id' => $request->kategori_id,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kota_terbit' => $request->kota_terbit,
            'status_buku' => $request->status_buku,
            'nama_penyumbang' => $request->nama_penyumbang ?? '-',
            'id_penyumbang' => $request->id_penyumbang ?? '-',
            'tgl_sumbang' => $request->tgl_sumbang ?? null,
        ]);
        Alert::image('Buku Berhasil Diubah', 'Silahkan kembali ke halaman Tambah dan Sumbang Buku' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('tambah_sumbang.index'));
    }


    public function destroy ($id){
        Buku::find($id)->delete();
        return back();
    }
}
