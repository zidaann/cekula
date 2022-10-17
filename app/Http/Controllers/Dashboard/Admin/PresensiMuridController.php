<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresensiMuridController extends Controller
{
    public function index (){
        return view('dashboard.presensi.murid.index'); 
     }
 
     public function create (){
        return view('dashboard.presensi.murid.create'); 
     }

     public function edit (){
        return view('dashboard.presensi.murid.edit'); 
     }
}
