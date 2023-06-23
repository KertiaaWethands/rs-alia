<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Janji;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
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

        if($request->username == 'adminAlia'){
            if($cekUser){
                return redirect('/admin');
            }else{
                return redirect('/login');
            }
        }else{
            if($cekUser){
                return view('homepage');
            }else{
                return redirect('/login');
            }
        }
    }

    public function profile(){
        $User = User::where('id', Auth::id())->first();
        $janji = Janji::where('idPengguna',Auth::id())->get();
        $noJanji = 1;

        return view('profil', ['user' => $User, 'janji' => $janji, 'noJanji' => $noJanji]);
    }

    public function updateProfile(Request $request){

        $request->validate([
            'nama' => 'string',
            'nomor' => 'max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'foto' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if($request->foto != null){
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('/images'), $imageName);

            User::where('id', Auth::id())->update([
                'nama' => $request->nama,
                'username' => $request->username,
                'tglLahir' => $request->tanggal_lahir,
                'nomor' => $request->whatsapp,
                'password' => Hash::make($request->password),
                'foto' => $imageName,
            ]);
        }else{
            User::where('id', Auth::id())->update([
                'nama' => $request->nama,
                'username' => $request->username,
                'tglLahir' => $request->tanggal_lahir,
                'nomor' => $request->whatsapp,
                'password' => Hash::make($request->password),
            ]);
        }



        return redirect('/profil');
    }

    public function jadwal(){
        $dokter = Dokter::get();

        return view ('jadwal', ['dokter' => $dokter]);
    }

    public function batal($id){
        Janji::where('id', $id)->delete();

        return redirect('/profil');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
