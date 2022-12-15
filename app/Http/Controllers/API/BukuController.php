<?php

namespace App\Http\Controllers\Api;

use App\Models\Buku;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => Buku::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => Buku::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => Buku::where('id', $id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            
            'judul' => 'required|string',
            'id_buku' => 'required',
            'kategori_id' => 'required',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',          
            'tahun_terbit' => 'required|string',
            'kota_terbit' => 'required|string',
            'status_buku' => 'required|string',
        ]);

        $image = $this->saveImage($request->cover, 'posts');

        $post = Buku::create([
            'judul' => $attrs['judul'],
            'id_buku' => $attrs['id_buku'],
            'kategori_id' => $attrs['kategori_id'],        
            'pengarang' => $attrs['pengarang'],
            'penerbit' => $attrs['penerbit'],         
            'tahun_terbit' => $attrs['tahun_terbit'],
            'kota_terbit' => $attrs['kota_terbit'],
            'cover' => $image,
            'slug' => Str::slug($attrs['judul'], '-'),
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = Buku::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'judul' => 'required|string',  
            'id_buku' => 'required',
            'kategori_id' => 'required',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',          
            'tahun_terbit' => 'required|string',
            'kota_terbit' => 'required|string',      
        ]);

        $image = $this->saveImage($request->pamflet, 'posts');

        if($image ==null){
            $post->update([
                'judul' => $attrs['judul'],
                'id_buku' => $attrs['id_buku'],
                'kategori_id' => $attrs['kategori_id'],        
                'pengarang' => $attrs['pengarang'],
                'penerbit' => $attrs['penerbit'],         
                'tahun_terbit' => $attrs['tahun_terbit'],
                'kota_terbit' => $attrs['kota_terbit'],
                'slug' => Str::slug($attrs['judul'], '-'),     
            ]);
        }else{
            $post->update([
                'judul' => $attrs['judul'],
                'kategori_id' => $attrs['kategori_id'],        
                'pengarang' => $attrs['pengarang'],
                'penerbit' => $attrs['penerbit'],         
                'tahun_terbit' => $attrs['tahun_terbit'],
                'kota_terbit' => $attrs['kota_terbit'],
                'cover' => $image,
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
        $post = Buku::find($id);

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
