<?php

namespace App\Http\Controllers;

use App\Data_Akademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Data_Dosen;

class LoginApiController extends Controller
{
    public function login(Request $request){
        $login = false;
        $users = Data_Dosen::where('Email',$request->get('email'))->first();
        if($users!=null){
            if(Hash::check($request->get('password'),$users->Password)){
                $login = true;
                $users->role = "teacher";
            }
        }else{
            $users = Data_Akademik::where('Email',$request->get('email'))->first();
            if($users!=null){
                if(Hash::check($request->get('password'),$users->Password)){
                    $login = true;
                    $users->role = "student";
                }
            }
        }
        if($login){
            return response()->json($users);
        }else{
            return response()->json(['message'=>'password or email invalid','status'=>403]);
        }


    }
}
