<?php

namespace App\Http\Controllers;
use App\pengguna;
use App\pengurus;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function masuk(Request $kiriman){
        $data1 = pengguna::where('username', $kiriman->username)->where('password', $kiriman)->get();

        $data2 = pengurus::where('username', $kiriman->username)->where('password', $kiriman)->get();

        if(count($data1)>0){
            Auth::guard('pengguna')->LoginUsingId($data1[0]['id']);
            return redirect('/pengguna');
        }else if(count($data2)>0){
            Auth::guard('pengurus')->LoginUsingId($data2[0]['id']);
            return redirect('/pengurus');
        }else{
            return "login gagal";
        }

    }

    function keluar(){
        if(Auth::guard('pengguna')->check()){
            Auth::guard('pengguna')->logout();
        }else if(Auth::guard('pengurus')->check()){
            Auth::guard('pengurus')->logout();
        }

        return redirect('/masuk');

    }
}