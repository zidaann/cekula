<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresensiPegawaiController extends Controller
{
    public function index (){
       return view('dashboard.presensi.pegawai.index'); 
    }

    public function create (){
        return view('dashboard.presensi.pegawai.create'); 
    }

    public function edit (){
        return view('dashboard.presensi.pegawai.edit'); 
    }
    
}
