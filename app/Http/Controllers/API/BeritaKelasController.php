<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BeritaKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaKelasController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => BeritaKelas::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => BeritaKelas::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => BeritaKelas::where('id', $id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            
            'judul' => 'required|string|unique:berita_kelas',
            'deskripsi' => 'required|string',
        ]);

        $image = $this->saveImage($request->pamflet, 'pamflets');

        $post = BeritaKelas::create([
            'judul' => $attrs['judul'],
            'deskripsi' => $attrs['deskripsi'],
            'slug' => Str::slug($attrs['judul'], '-'),
            'pamflet' => $image
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = BeritaKelas::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'judul' => 'required|string|unique:berita_kelas',
            'deskripsi' => 'required|string'
        ]);

        $image = $this->saveImage($request->pamflet, 'pamflets');

        if($image ==null){
            $post->update([
                'judul' =>  $attrs['judul'],
                'deskripsi' =>  $attrs['deskripsi'],      
                'slug' => Str::slug($attrs['judul'], '-'),
            ]);
        }else{
            $post->update([
                'judul' =>  $attrs['judul'],
                'deskripsi' =>  $attrs['deskripsi'],
                'pamflet' => $image,          
                'slug' => Str::slug($attrs['judul'], '-'),
            ]);
        }
        

        // for now skip for post image

        return response([
            'message' => 'Post updated.',
            'post' => $post
        ], 200);
    }
    //delete post
    public function destroy($id)
    {
        $post = BeritaKelas::find($id);

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

        // $post->comments()->delete();
        // $post->likes()->delete();
        $post->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }
}
