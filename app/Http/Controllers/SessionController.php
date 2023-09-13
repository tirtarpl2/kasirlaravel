<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'passsword'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            //kalau otentikasi sukses
            return 'sukses';
        } else{
            //kalau otentikasi gagal
            return 'gagal';
        }   
    }
}
