<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalKelas;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JadwalKelasController extends Controller
{
    public function index (){
        $kelas = Kelas::all();
      //   dd($kelas);
        return view('dashboard.akademik.jadwal_kelas.index', compact('kelas')); 
     }
 
     public function create (){
        return view('dashboard.akademik.jadwal_kelas.create'); 
     }
 
     public function show (JadwalKelas $jadwalKelas){
         // $jadwalKelas = JadwalKelas::where('kelas_id', $id);
         // $jadwal = $jadwalKelas->where('kelas_id', );
         // dd($jadwalKelas);
        return view('dashboard.akademik.jadwal_kelas.show', compact('jadwalKelas')); 
     }
}
