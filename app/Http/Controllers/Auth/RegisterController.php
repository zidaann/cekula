<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create (){
       return view('auth.register'); 
    }

    public function store (Request $request){
       $rules = [
        'name'  => 'required',
        'username' => 'required|min:3|max:15',
        'password' => 'required|min:6'
       ];

       $request->validate($rules);
       User::create([
        'name' => $request->name,
        'username' => $request->username,
        'password' => bcrypt($request->password)
       ]);

       return to_route('login'); 
    }
}
