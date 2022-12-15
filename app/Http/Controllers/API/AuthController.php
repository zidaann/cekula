<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{   
    //Register User
    public function register(Request $request)
    {

        //Validate fields
        $attrs = $request->validate([
            'nama' => 'required|string',
            'status' => 'required|string',
            'username' => 'unique:users',
            'password' => 'min:6|confirmed',  
        ]);

        $user = User::create([
            'nama' => $attrs['nama'],
            'status' => $attrs['status'],
            'username' => $attrs['username'],
            'password' => bcrypt($attrs['password']),
            'password2' => $attrs['password']
        ]);
        

        //Return user & token in response
        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ], 200);
    }

    //Login user
    public function login(Request $request)
    {

        //Validate fields
        $attrs = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        //Attmpt login
        if (!Auth::attempt($attrs)) {
            # code...
            return response([
                'message' => 'Invalid credentials.'
            ]);
        }

        //Return user & token in response
        return response([
            'status1' => 200,
            'messages' => 'Successfully authentication',
            'user' => auth()->user(),
            'token' => $request->user()->createToken('secret')->plainTextToken
        ], 200);
    }

    //Logout User
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response([
            'message' => 'Logout Success.'
        ], 200);
    }

    //get user details
    public function user()
    {
        return response([
            'user' => auth()->user()
        ], 200);
    }

    public function murid()
    {
        return response([
            'user' => User::whereIn('status', ['Murid', 'OSIS'])->get()
        ], 200);
    }

    public function pegawai()
    {
        return response([
            'user' => User::orderBy('nama', 'asc')->whereIn('status', ['Guru Kelas','Wali Kelas','Pembina OSIS', 'Guru Ekstrakurikuler', 'Administrator', 'Tata Usaha', 'Pegawai Perpustakaan', 'Pegawai Koperasi Sekolah', 'Kepala Sekokah'])->get()
        ], 200);
    }

    public function statusshow($status)
    {   
        if($status == "Murid"){
            return response([
            
                'user' => User::where('status', $status)->orWhere('is_osis', true)->get()
            ], 200);
        }elseif($status == "Guru Mata Pelajaran"){
            return response([
                'user' => User::where('status', $status)->orWhere('is_wali_kelas', true)->orWhere('is_pembina_osis', true)->get()
            ], 200);
        }
        else{
            return response([
            
            'user' => User::where('status', $status)->get()
        ], 200);
        }   
    }

    public function kelasshow($kelas_id)
    {
        return response([
            'user' => User::where('kelas_id', $kelas_id)->get()
        ], 200);
    }

    public function usernameshow($username)
    {
        return response([
            'user' => User::where('username', $username)->get()
        ], 200);
    }

   

    // update user
    public function update(Request $request)
    {
        $attrs = $request->validate([
            'nama' => 'required|string'
        ]);

        $image = $this->saveImage($request->image, 'profiles');

        auth()->user()->update([
            'nama' => $attrs['nama'],
            'image' => $image
        ]);

        return response([
            'message' => 'User updated.',
            'user' => auth()->user()
        ], 200);
    }

    public function updaterole(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        // validate fields
        $attrs = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'is_osis' => 'required',
            'is_wali_kelas' => 'required',
            'is_pembina_osis' => 'required'
        ]);

        $user->update([
            'username' =>$attrs['username'],
            'password' => bcrypt($attrs['password']),
            'password2' => $attrs['password'],
            'is_osis' => $attrs['is_osis'],
            'is_wali_kelas' => $attrs['is_wali_kelas'],
            'is_pembina_osis' => $attrs['is_pembina_osis'],
        ]);

        return response([
            'message' => 'Post updated.',
            'post' => $user
        ], 200);
    }

    public function updatekelas(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        $user->update([
            'kelas_id' => null, 
        ]);

        return response([
            'message' => 'Post updated.',
            'post' => $user
        ], 200);
    }

    //Update / Berganti Status User
    public function updatestatus(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        // validate fields
        $attrs = $request->validate([
            'status' => 'required|string', 
        ]);

        $user->update([
            'status' => $attrs['status'],
        ]);

        return response([
            'message' => 'Post updated.',
            'post' => $user
        ], 200);
    }
}
