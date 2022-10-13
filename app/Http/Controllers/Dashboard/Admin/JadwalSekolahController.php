<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalSekolahController extends Controller
{
    public function index (){
       return view('dashboard.akademik.jadwal_sekolah.index'); 
    }
}
