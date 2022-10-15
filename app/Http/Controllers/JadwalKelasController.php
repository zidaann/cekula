<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalKelasController extends Controller
{
    public function index (){
       return view('dashboard.akademik.jadwal_kelas.index'); 
    }
}
