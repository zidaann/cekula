<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => Hari::orderBy('created_at', 'desc')->get()
        ], 200);
    }
}
