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
    public function index (Request $request){
        $sorts = new Buku();
        $sorts = $sorts->sortir;
        $keyword = $request->search;
        $kategoris = KategoriBuku::get();
        return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.index',[
            'kategoris' => $kategoris,
            // 'bukus' => Buku::select('id', 'judul', 'slug', 'cover')->,
            'bukus' => Buku::where('judul', 'like' ,'%' . $keyword . '%')->get(),
            'sorts' => $sorts
        ]);
    //    return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.index', compact('bukus', 'kategoris', request(['search'])); 
    }

    public function filter (Request $request){
        $sorts = new Buku();
        $sorts = $sorts->sortir;
        $filterBuku = Buku::where('kategori_id', $request->kategori)->get();
        $kategoris = KategoriBuku::get();

        if($request->sort == 1){
            $filterBuku = Buku::latest()->get();
        }elseif($request->sort == 2){
            $filterBuku = Buku::orderBy('judul', 'asc')->get();
        }
        elseif($request->sort == 3){
            $filterBuku = Buku::orderBy('judul', 'desc')->get();
        }
        return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.search', compact('filterBuku', 'kategoris', 'sorts'));
       
    }

    public function create (Buku $buku){
        $kategoris = KategoriBuku::get();
        $submit = "Buat Data Buku";
        return view('dashboard.fasilitas.perpustakaan.buku_perpustakaan.create', compact('kategoris', 'submit', 'buku'));
    }

    public function store (TambahBukuRequest $request){
        // dd($request->all());
        if($request->cover == null){
            $cover = "";
        }
        else{
            $cover = $request->file('cover')->store('pamflets', 'public');
        }
        Buku::create([
            'id_buku' => $request->id_buku,
            'cover' => $cover,
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kota_terbit' => $request->kota_terbit,
            'status_buku' => $request->status_buku,
            'id_penyumbang' => $request->id_penyumbang,
            'nama_penyumbang' => $request->nama_penyumbang,
            'tgl_sumbang' => $request->tgl_sumbang,

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
    
        $buku->update($request->all());
        Alert::image('Data Buku Berhasil Diubah', 'Silahkan kembali ke halaman buku perpustakaan' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('tambah_buku.index'));

    }

    public function destroy ($id){
        Buku::find($id)->delete();
        return back();
    }
}
