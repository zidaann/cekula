<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => Ppdb::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => Ppdb::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($user_id)
    {   

        return response([
            'post' => Ppdb::where('user_id', $user_id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            'calon_murid'=> 'required|string',
            'NISN'=> 'required|string|unique:ppdbs',
            'jenis_kelamin'=> 'required|string',
            'tempat_lahir'=> 'required|string',
            'tanggal_lahir'=> 'required|string',
            'alamat'=> 'required|string',
            'agama'=> 'required|string',
            'telepon_murid'=> 'required|string',
            'tahun_masuk'=> 'required|string',
            'asal_sekolah'=> 'required|string',
            'alamat_asal_sekolah'=> 'required|string',
            'nama_bapak'=> 'required|string',
            'nama_ibu'=> 'required|string',
            'pekerjaan_bapak'=> 'required|string',
            'pekerjaan_ibu'=> 'required|string',
            'penghasilan_bapak'=> 'required|string',
            'penghasilan_ibu'=> 'required|string',
            'telepon_bapak'=> 'required|string',
            'telepon_ibu'=> 'required|string',
            'nama_wali'=> 'required|string',
            'pekerjaan_wali'=> 'required|string',
            'telepon_wali'=> 'required|string',
        ]);

        $foto_murid = $this->saveImage($request->foto_murid, 'ppdbs');
        $SKL = $this->saveFile($request->SKL, 'ppdbs');
        $K4S1 = $this->saveFile($request->K4S1, 'ppdbs');
        $K4S2 = $this->saveFile($request->K4S2, 'ppdbs');
        $K5S1 = $this->saveFile($request->K5S1, 'ppdbs');
        $K5S2 = $this->saveFile($request->K5S2, 'ppdbs');
        $K6S1 = $this->saveFile($request->K6S1, 'ppdbs');
        $K6S2 = $this->saveFile($request->K6S2, 'ppdbs');       
        $KK = $this->saveFile($request->KK, 'ppdbs');
        $Akte = $this->saveFile($request->Akte, 'ppdbs');
        
        $post = Ppdb::create([
            'calon_murid' => $attrs['calon_murid'],
            'NISN'=> $attrs['NISN'],
            'jenis_kelamin'=> $attrs['jenis_kelamin'],
            'tempat_lahir'=> $attrs['tempat_lahir'],
            'tanggal_lahir'=> $attrs['tanggal_lahir'],
            'alamat'=> $attrs['alamat'],
            'agama'=> $attrs['agama'],
            'telepon_murid'=> $attrs['telepon_murid'],
            'tahun_masuk'=> $attrs['tahun_masuk'],
            'asal_sekolah'=> $attrs['asal_sekolah'],
            'alamat_asal_sekolah'=> $attrs['alamat_asal_sekolah'],
            'foto_murid'=>  $foto_murid,
            'nama_bapak'=> $attrs['nama_bapak'],
            'nama_ibu'=> $attrs['nama_ibu'],
            'pekerjaan_bapak'=> $attrs['pekerjaan_bapak'],
            'pekerjaan_ibu'=> $attrs['pekerjaan_ibu'],
            'penghasilan_bapak'=> $attrs['penghasilan_bapak'],
            'penghasilan_ibu'=> $attrs['penghasilan_ibu'],
            'telepon_bapak'=> $attrs['telepon_bapak'],
            'telepon_ibu'=> $attrs['telepon_ibu'],
            'nama_wali'=> $attrs['nama_wali'],
            'pekerjaan_wali'=> $attrs['pekerjaan_wali'],
            'telepon_wali'=> $attrs['telepon_wali'],
            'SKL'=> $SKL,
            'rapor_K4S1'=> $K4S1,
            'rapor_K4S2'=> $K4S2,
            'rapor_K5S1'=> $K5S1,
            'rapor_K5S2'=> $K5S2,
            'rapor_K6S1'=> $K6S1,
            'rapor_K6S2'=> $K6S2,
            'KK' => $KK,
            'Akte'=> $Akte,
            'user_id' => auth()->user()->id,
            'status' => 'Menunggu',
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = Ppdb::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'status' => 'required|string',
            'sandi' => 'string'
        ]);

         $post->update([
                'status' =>  $attrs['status'],
                'sandi' =>  $attrs['sandi'],  
            ]);

        return response([
            'message' => 'Post updated.',
            'post' => $post
        ], 200);
    }
    //delete post
    public function destroy($id)
    {
        $post = Ppdb::find($id);

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
