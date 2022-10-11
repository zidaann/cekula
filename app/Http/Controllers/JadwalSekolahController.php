<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalSekolahController extends Controller
{
    public function index (){
       return view('dashboard.akademik.jadwal_sekolah.index'); 
    }

    public function create (){
       return view('dashboard.akademik.jadwal_sekolah.create');
    }
}
