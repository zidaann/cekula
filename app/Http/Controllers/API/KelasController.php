<?php

namespace App\Http\Controllers\Api;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => Kelas::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => Kelas::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => Kelas::where('id', $id)->get()
        ], 200);
    }

    public function tingkatshow($tingkat_kelas)
    {
        return response([
            'post' => Kelas::where('tingkat_kelas', $tingkat_kelas)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([      
            'tingkat_kelas' => 'required|string',
            'nama_kelas' => 'required|string',
        ]);

        $post = Kelas::create([
            'tingkat_kelas' => $attrs['tingkat_kelas'],
            'nama_kelas' => $attrs['nama_kelas'],
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = Kelas::find($id);

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
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required|string'      
        ]);

        $image = $this->saveImage($request->pamflet, 'posts');

        if($image ==null){
            $post->update([
                'nama' =>  $attrs['nama'],
                'tanggal_mulai' => $attrs['tanggal_mulai'],
                'tanggal_selesai' => $attrs['tanggal_selesai'],
                'deskripsi' =>  $attrs['deskripsi'],      
            ]);
        }else{
            $post->update([
                'nama' =>  $attrs['nama'],
                'tanggal_mulai' => $attrs['tanggal_mulai'],
                'tanggal_selesai' => $attrs['tanggal_selesai'],
                'deskripsi' =>  $attrs['deskripsi'],
                'pamflet' => $image
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
        $post = Kelas::find($id);

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
