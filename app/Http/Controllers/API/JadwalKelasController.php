<?php

namespace App\Http\Controllers\Api;

use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalKelasController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => JadwalKelas::orderBy('created_at', 'desc')->with('hari:id,nama')->with('mapel:id,nama,icon')->with('pegawai:id,nama')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => JadwalKelas::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => JadwalKelas::where('id', $id)->get()
        ], 200);
    }

    public function kelasshow($id)
    {
        return response([
            'posts' => JadwalKelas::where('kelas_id', $id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            'hari_id' => 'required',  
            'mapel_id' => 'required',
            'kelas_id' => 'required',
            'jam_masuk' => 'required',
            'jam_selesai' => 'required',           
            'pegawai_id' => 'required',
        ]);

        $post = JadwalKelas::create([
            'hari_id' => $attrs['hari_id'],
            'mapel_id' => $attrs['mapel_id'],
            'kelas_id' => $attrs['kelas_id'],
            'jam_masuk' => $attrs['jam_masuk'],
            'jam_selesai' => $attrs['jam_selesai'],    
            'pegawai_id' => $attrs['pegawai_id'],           
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = JadwalKelas::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'nama' => 'required|string',  
            'jadwal' => 'required|string',
            'jam_masuk' => 'required',
            'jam_selesai' => 'required',
            'pegawai_id' => 'required',
        ]);

        $image = $this->saveImage($request->pamflet, 'posts');

        if($image ==null){
            $post->update([
                'nama' =>  $attrs['nama'],
                'jam_masuk' => $attrs['jam_masuk'],
                'jam_selesai' => $attrs['jam_selesai'],
                'jadwal' =>  $attrs['jadwal'],         
                'pegawai_id' => $attrs['pegawai_id'],      
            ]);
        }else{
            $post->update([
                'nama' =>  $attrs['nama'],
                'jam_masuk' => $attrs['jam_masuk'],
                'jam_selesai' => $attrs['jam_selesai'],
                'jadwal' =>  $attrs['jadwal'],  
                'pamflet' => $image,
                'pegawai_id' => $attrs['pegawai_id'],
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
        $post = JadwalKelas::find($id);

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
