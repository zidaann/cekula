<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanPerpustakaanController extends Controller
{
    public function create (){
        return view('dashboard.fasilitas.perpustakaan.create'); 
    }
}
