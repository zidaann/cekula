<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaSekolahController extends Controller
{
    public function index (){
       return view('dashboard.berita.berita_sekolah.index'); 
    }

    public function create (){
        return view('dashboard.berita.berita_sekolah.create'); 
    }
    public function edit (){
        return view('dashboard.berita.berita_sekolah.edit'); 
    }
    public function show (){
        return view('dashboard.berita.berita_sekolah.show'); 
    }
}
