<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\DaftarKelasRequest;

class DaftarKelasController extends Controller
{
    public function index (){
        $kelas = Kelas::get();
        $kelas7 = Kelas::where('tingkat_kelas', '7')->count();
        $kelas8 = Kelas::where('tingkat_kelas', '8')->count();
        $kelas9 = Kelas::where('tingkat_kelas', '9')->count();
       return view('dashboard.akademik.daftar_kelas.index', compact('kelas', 
    'kelas7', 'kelas8', 'kelas9')); 
    }

    public function create (){
        $waliKelas = User::where('status', 'Wali Kelas')->get();
        return view('dashboard.akademik.daftar_kelas.create', compact('waliKelas'));
    }

    public function store (DaftarKelasRequest $request){
        Kelas::create($request->all());
        Alert::image('Data Kelas Baru Berhasil Disimpan', 'Silahkan kembali ke halaman Daftar Kelas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_kelas.index'));
    }

    public function edit ($id){
        $waliKelas = User::where('status', 'Wali Kelas')->get();
        $kelas = Kelas::where('id', $id)->first();
        return view('dashboard.akademik.daftar_kelas.edit',compact('kelas',
    'waliKelas'));
    }

    public function update (Request $request, Kelas $kelas){
        $kelas->update($request->all());
        Alert::image('Data Kelas Berhasil Diubah', 'Silahkan kembali ke halaman Daftar Kelas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_kelas.index'));
    }

    public function destroy ($id){
        Kelas::find($id)->delete();
        return back();
    }
}
