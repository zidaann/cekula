<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\BeritaKelas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\BeritaKelasRequest;

class BeritaKelasController extends Controller
{
    public function index (){
        $beritas = BeritaKelas::latest()->get();
       return view('dashboard.berita.berita_kelas.index', compact('beritas')); 
    }
    public function create (BeritaKelas $beritaKelas){
      $submit = "Unggah Berita";
       return view('dashboard.berita.berita_kelas.create', compact('submit', 'beritaKelas')); 
    }

    public function store (BeritaKelasRequest $request){
      if($request->pamflet == null){
         $pamflet = "";
     }
     else{
         $pamflet = $request->file('pamflet')->store('pamflets');
     }

     BeritaKelas::create([
         'pamflet' => $pamflet,
         'judul' => $request->judul,
         'slug' => Str::slug($request->judul, '-'),
         'tgl_mulai' => $request->tgl_mulai,
         'tgl_selesai' => $request->tgl_selesai,
         'deskripsi' => $request->deskripsi
     ]);
      Alert::image('Berita Berhasil Diposting', 'Silahkan kembali ke halaman berita' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
      return redirect(route('berita_kelas.index'));
    }

    public function edit (BeritaKelas $beritaKelas){
        $submit = "Simpan Perubahan";
       return view('dashboard.berita.berita_kelas.edit', compact('submit', 'beritaKelas')); 
    }

    public function update (BeritaKelasRequest $request, BeritaKelas $beritaKelas){
        if($request->file('pamflet')){
            if($beritaKelas->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets');
        }
        $request['slug'] = Str::slug($request->judul, '-');

        $beritaKelas->update($request->all());
        Alert::image('Berita Berhasil Diubah', 'Silahkan kembali ke halaman berita kelas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('berita_kelas.index'));
    }

    public function show (BeritaKelas $beritaKelas){
        return view('dashboard.berita.berita_kelas.show', compact('beritaKelas'));
    }

    public function destroy ($id){
        BeritaKelas::findOrFail($id)->delete();
        return back();
    }
}
