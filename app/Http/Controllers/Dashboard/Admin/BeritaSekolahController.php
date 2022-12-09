<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeritaSekolah;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\BeritaSekolahRequest;

class BeritaSekolahController extends Controller
{
    public function index (){
        $beritas = BeritaSekolah::latest()->get();
       return view('dashboard.berita.berita_sekolah.index', compact('beritas')); 
    }

    public function create (BeritaSekolah $beritaSekolah){
        $submit = "Unggah Berita";
        return view('dashboard.berita.berita_sekolah.create', compact('submit', 'beritaSekolah')); 
    }

    public function store (BeritaSekolahRequest $request){
        if($request->pamflet == null){
            $pamflet = "";
        }
        else{
            $pamflet = $request->file('pamflet')->store('pamflets');
        }

        BeritaSekolah::create([
            'pamflet' => $pamflet,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'deskripsi' => $request->deskripsi
        ]);
        Alert::image('Berita Berhasil Diposting', 'Silahkan kembali ke halaman berita' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('berita_sekolah.index'));
        
    }
    public function edit (BeritaSekolah $beritaSekolah){
        $submit = "Simpan Perubahan";
        return view('dashboard.berita.berita_sekolah.edit', compact('submit', 'beritaSekolah')); 
    }
    public function show (BeritaSekolah $beritaSekolah){
        return view('dashboard.berita.berita_sekolah.show', compact('beritaSekolah')); 
    }

    public function update (BeritaSekolahRequest $request, BeritaSekolah $beritaSekolah){
        if($request->file('pamflet')){
            if($beritaSekolah->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets');
        }
        $request['slug'] = Str::slug($request->judul, '-');

        $beritaSekolah->update($request->all());
        Alert::image('Berita Sekolah Berhasil Diubah', 'Silahkan kembali ke halaman berita sekolah' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('berita_sekolah.index'));
        
    }

    public function destroy ($id){
        BeritaSekolah::find($id)->delete();
        return back();
    }
}
