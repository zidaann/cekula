<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => KategoriBuku::orderBy('created_at', 'desc')->get()
        ], 200);
    }
}
