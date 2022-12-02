<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Pegawai;
use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalKelasController extends Controller
{
    public function index (){
      $jadwals = JadwalKelas::get();
      $kelas = Kelas::get();
      //   dd($kelas);
        return view('dashboard.akademik.jadwal_kelas.index', compact('kelas', 'jadwals')); 
     }
 
     public function create (){
        return view('dashboard.akademik.jadwal_kelas.create'); 
     }
 
     public function show (JadwalKelas $jadwalKelas){
         // $jadwalKelas->where('kelas_id' , $jadwalKelas->kelas_id)->first();
         $kelas = $jadwalKelas->get();
         $jadwals = $jadwalKelas->first();
         // $jadwals = $jadwalKelas->get();
         $hari = Hari::get();
         // dd($jadwals);
         $mapels = $jadwalKelas->get();
        return view('dashboard.akademik.jadwal_kelas.show', compact( 'jadwals', 'mapels', 'kelas', 'hari')); 
     }
}
