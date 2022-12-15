<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KartuPelajarDigitalController extends Controller
{
    public function index (){
        return view('dashboard.akademik.kartu_pelajar_murid.index');
    }
}
