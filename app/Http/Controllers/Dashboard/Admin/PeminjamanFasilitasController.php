<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanFasilitasController extends Controller
{
    public function index (){
       return view('dashboard.fasilitas.peminjaman.index');
    }
    public function create (){
       return view('dashboard.fasilitas.peminjaman.create');
    }
}
