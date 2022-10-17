<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKelasController extends Controller
{
    public function index (){
        return view('dashboard.akademik.jadwal_kelas.index'); 
     }
 
     public function create (){
        return view('dashboard.akademik.jadwal_kelas.create'); 
     }
 
     public function show (){
        return view('dashboard.akademik.jadwal_kelas.detailJadwal'); 
     }
}
