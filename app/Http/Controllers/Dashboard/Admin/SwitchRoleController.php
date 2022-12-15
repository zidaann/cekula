<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Barryvdh\Debugbar\ServiceProvider;

class SwitchRoleController extends Controller
{
    public function switch ( Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if($request->is_osis == 1){
            $data['is_osis'] = 1;
            $data['status'] = "Pengurus OSIS";
            $user->update($data);
            return back();
        }else{
            $data['is_osis'] = 0;
            $data['status'] = "Murid";
            $user->update($data);
            return back();
        }
    }
}
