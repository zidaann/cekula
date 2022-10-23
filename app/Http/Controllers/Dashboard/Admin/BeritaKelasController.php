<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaKelasController extends Controller
{
    public function index (){
       return view('dashboard.berita.berita_kelas.index'); 
    }
    public function create (){
       return view('dashboard.berita.berita_kelas.create'); 
    }
    public function edit (){
       return view('dashboard.berita.berita_kelas.edit'); 
    }
}
