<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use App\Models\KegiatanOsis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KegiatanOsisController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => KegiatanOsis::orderBy('created_at', 'desc')->with('user:id,nama')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => KegiatanOsis::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => KegiatanOsis::where('id', $id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            'nama' => 'required|string',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'deskripsi' => 'required|string',
            'user_id' => 'required'
        ]);

        $image = $this->saveImage($request->pamflet, 'pamflets');

        $post = KegiatanOsis::create([
            'nama' => $attrs['nama'],
            'tgl_mulai' => $attrs['tgl_mulai'],
            'tgl_selesai' => $attrs['tgl_selesai'],
            'deskripsi' => $attrs['deskripsi'],
            'pamflet' => $image,
            'slug' => Str::slug($attrs['nama'], '-'), 
            'user_id' => $attrs['user_id'],
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = KegiatanOsis::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'nama' => 'required|string',       
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'deskripsi' => 'required|string',
            'user_id' => 'required'    
        ]);

        $image = $this->saveImage($request->pamflet, 'pamflets');

        if($image ==null){
            $post->update([
                'nama' =>  $attrs['nama'],
                'tgl_mulai' => $attrs['tgl_mulai'],
                'tgl_selesai' => $attrs['tgl_selesai'],
                'deskripsi' =>  $attrs['deskripsi'],
                'slug' => Str::slug($attrs['nama'], '-'),
                'user_id' => $attrs['user_id'], 
            ]);
        }else{
            $post->update([
                'nama' =>  $attrs['nama'],
                'tgl_mulai' => $attrs['tgl_mulai'],
                'tgl_selesai' => $attrs['tgl_selesai'],
                'deskripsi' =>  $attrs['deskripsi'],
                'pamflet' => $image,
                'slug' => Str::slug($attrs['nama'], '-'),
                'user_id' => $attrs['user_id'],
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
        $post = KegiatanOsis::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }
        $post->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }
}
