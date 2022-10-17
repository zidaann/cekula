<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index (){
        return view('auth.login');
    }

    public function store (Request $request){
        
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        $validateData = $request->validate($rules);
        if(Auth::attempt($validateData)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        throw ValidationException::withMessages([
            // 'username' => '*Username anda salah, silahkan masukkan username yang benar',
            'password' => '*Kata sandi salah silahkan masukkan kata sandi
            yang benar'
        ]);

    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('home');
    }
}
