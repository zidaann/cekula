<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Buku;
use Illuminate\Support\Str;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TambahBukuRequest;
use RealRashid\SweetAlert\Facades\Alert;

class TambahBukuController extends Controller
{
    public function index (){
        $bukus = Buku::select('id', 'judul_buku', 'slug', 'pamflet')->get();
       return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.index', compact('bukus')); 
    }

    public function create (Buku $buku){
        $kategoris = KategoriBuku::get();
        $submit = "Buat Data Buku";
        return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.create', compact('kategoris', 'submit', 'buku'));
    }

    public function store (TambahBukuRequest $request){
        // dd($request->all());
        if($request->pamflet == null){
            $pamflet = "";
        }
        else{
            $pamflet = $request->file('pamflet')->store('pamflets');
        }
        Buku::create([
            'id_buku' => $request->id_buku,
            'pamflet' => $pamflet,
            'kategori_id' => $request->kategori_id,
            'judul_buku' => $request->judul_buku,
            'slug' => Str::slug($request->judul_buku, '-'),
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kota_terbit' => $request->kota_terbit,
            'status_buku' => $request->status_buku,
        ]);
        Alert::image('Data Buku Berhasil Disimpan', 'Silahkan kembali ke halaman buku perpustakaan ' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('tambah_buku.index'));
    }

    public function edit (Buku $buku){
        $submit = "Simpan Perubahan";
        $kategoris = KategoriBuku::select('id', 'nama')->get();
        return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.edit', compact('submit', 'buku', 'kategoris'));
    }

    public function update (Buku $buku, TambahBukuRequest $request){
        if($request->file('pamflet')){
            if($buku->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets');
        }
        $request['slug'] = Str::slug($request->judul_buku, '-');
        $buku->update($request->all());
        Alert::image('Data Buku Berhasil Diubah', 'Silahkan kembali ke halaman buku perpustakaan' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('tambah_buku.index'));

    }
}
