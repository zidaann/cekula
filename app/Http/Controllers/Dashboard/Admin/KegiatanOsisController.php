<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\KegiatanOsis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\KegiatanOsisRequest;

class KegiatanOsisController extends Controller
{
    public function index (){
        $kegiatans = KegiatanOsis::latest()->get();
       return view('dashboard.non-akademik.osis.index', compact('kegiatans')); 
    }

    public function create (KegiatanOsis $kegiatan){
        $pembinaOsis = User::where('is_pembina_osis', 1)->get();
        $submit = "Buat Kegiatan";
        return view('dashboard.non-akademik.osis.create', compact('submit', 'pembinaOsis', 'kegiatan'));
    }

    public function store (KegiatanOsisRequest $request){
        if($request->pamflet == null){
            $pamflet = "";
        }
        else{
            $pamflet = $request->file('pamflet')->store('storage/pamflets', 'public');
        }
        $request['slug'] = Str::slug($request->nama, '-');
        KegiatanOsis::create([
            'pamflet' => $pamflet,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'lokasi' => $request->lokasi,
            'user_id' => $request->user_id,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'deskripsi' => $request->deskripsi
        ]);
        Alert::image('Kegiatan Osis Berhasil Diunggah', 'Silahkan kembali ke halaman kegiatan osis' ,'/assets/img/alert/alert_berhasil.png', '120px','200px');
        return redirect()->route('kegiatan_osis.index');
    }

    public function edit (KegiatanOsis $kegiatan){
        $pembinaOsis = User::where('is_pembina_osis', 1)->get();
        $submit = "Simpan Perubahan";
        return view('dashboard.non-akademik.osis.edit', compact('kegiatan', 'submit', 'pembinaOsis'));
    }

    public function update (KegiatanOsis $kegiatan, KegiatanOsisRequest $request){
        if($request->file('pamflet')){
            if($kegiatan->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets', 'public');
        }
        $request['slug'] = Str::slug($request->judul, '-');
        $kegiatan->update($request->all());
        Alert::image('Kegiatan Osis Berhasil Diubah', 'Silahkan kembali ke halaman kegiatan osis' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('kegiatan_osis.index'));
    }

    public function show (KegiatanOsis $kegiatan){
        return view('dashboard.non-akademik.osis.show', compact('kegiatan'));
    }

    public function destroy ($id){
        KegiatanOsis::find($id)->delete();
        return back();
    }
}
