<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalSekolah;
use Illuminate\Http\Request;

class JadwalSekolahController extends Controller
{
   public function index (){
      return view('dashboard.akademik.jadwal_sekolah.index',[
         'jadwals' => JadwalSekolah::get()
      ]); 
   }

   public function create (){
      return view('dashboard.akademik.jadwal_sekolah.create');
   }
   public function edit (){
      return view('dashboard.akademik.jadwal_sekolah.edit');
   }

   public function store (Request $request){
      // dd($request->all());
       $validateData = $request->validate([
         'pamflet' => 'required|image|file|max:1024',
         'judul' => 'required',
         'tanggal_pelaksanaan' => 'required',
         'tanggal_selesai_pelaksanaan' => 'required',
         'deskripsi' => 'required'
       ]);

       if($request->file('pamflet')){
         $validateData['pamflet'] = $request->file('pamflet')->store('pamflets');
       }

       JadwalSekolah::create($validateData);
       return redirect(route('jadwal_sekolah.index'));
   }

   public function show (JadwalSekolah $judul){
      
   }

}
