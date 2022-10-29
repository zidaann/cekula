<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaporMuridController extends Controller
{
    public function index (){
       return view('dashboard.akademik.rapor.index'); 
    }

    public function detailRapor (){
        return view('dashboard.akademik.rapor.detail_rapor');
    }
}
