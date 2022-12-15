<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Models\DataFasilitas;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => DataFasilitas::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => DataFasilitas::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => DataFasilitas::where('id', $id)->orderBy('created_at', 'desc')->get()
        ], 200);
    }

    // get all post by kategori
    public function kategorishow($kategori)
    {
        return response([
            'post' => DataFasilitas::where('kategori', $kategori)->orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            
            'nama' => 'required|string',
            'jumlah' => 'required',
            'kategori' => 'required|string'
        ]);

        $post = DataFasilitas::create([
            'nama' => $attrs['nama'],
            'jumlah' => $attrs['jumlah'],
            'kategori' => $attrs['kategori'],
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = DataFasilitas::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        // if ($post->user_id != auth()->user()->id) {
        //     return response([
        //         'message' => 'Permission denied.'
        //     ], 403);
        // }

        //validate fields
        $attrs = $request->validate([
            'nama' => 'required|string',
            'jumlah' => 'required|integer'  
        ]);

        $image = $this->saveImage($request->pamflet, 'posts');

        
        $post->update([
            'nama' => $attrs['nama'],
            'jumlah' => $attrs['jumlah'],   
        ]);
        
        // for now skip for post image

        return response([
            'message' => 'Post updated.',
            'post' => $post
        ], 200);
    }
    //delete post
    public function destroy($id)
    {
        $post = DataFasilitas::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        // if ($post->user_id != auth()->user()->id) {
        //     return response([
        //         'message' => 'Permission denied.'
        //     ], 403);
        // }

        $post->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }
}
