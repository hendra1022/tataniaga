<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class login extends Controller{

    function dboperation(Request $req){
        $password = DB::table('users')->where('email', $req->input('email'))->value('password');
        if(Hash::check($req->input('password'), $password)){
            return "SUKSES LOGIN!";
        }
        else{
            return "Gagal Login!";
        }
    }
}