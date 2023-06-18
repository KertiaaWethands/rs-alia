<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexRegister(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'username' => 'required|unique:users',
            'tglLahir' => 'required',
            'nomor' => 'required|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|string',
        ]);
        
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'tglLahir' => $request->tglLahir,
            'nomor' => $request->nomor,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

    public function indexLogin(){
        return view('login');
    }

    public function login(Request $request){
        $cekUser = Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        if($cekUser){
            return view('homepage');
        }else{
            return redirect('/login');
        }
    }
}
