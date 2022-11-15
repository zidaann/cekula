<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\JadwalSekolah;
use App\Http\Controllers\Controller;

class JadwalSekolahAPIController extends Controller
{
    public function index (){
        return response()->json([
            'message' => 'Data Berhasil',
            'data' => JadwalSekolah::get()
        ],200);
     }
     public function edit (){
        return view('dashboard.akademik.jadwal_sekolah.edit');
     }
  
    //  public function create (Request $request){
    //     // dd($request->all());
    //      $validateData = $request->validate([
    //        'pamflet' => 'required|image|file|max:1024',
    //        'judul' => 'required',
    //        'tanggal_pelaksanaan' => 'required',
    //        'tanggal_selesai_pelaksanaan' => 'required',
    //        'deskripsi' => 'required'
    //      ]);
  
    //      if($request->file('pamflet')){
    //        $validateData['pamflet'] = $request->file('pamflet')->store('pamflets');
    //      }
  
    //      $jadwalSekolah = JadwalSekolah::create($validateData);
    //      return response()->json([
    //         'message' => 'Jadwal Sekolah Berhasil Dibuat!',
    //         'beritas' => $jadwalSekolah
    //      ]);
    //  }
}
