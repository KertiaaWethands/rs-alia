<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Janji;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function indexAdmin(){
        if(Auth::user()->username == 'adminAlia'){
            $janji = Janji::join('users', 'janjis.idPengguna', '=', 'users.id')->get([
                'users.nama', 'users.nomor', 'janjis.namaDokter', 'janjis.tglJanji', 'janjis.waktuJanji', 'janjis.id', 'janjis.status'
            ]);
            $idjanji = 1;
    
            $dokter = Dokter::get();
            $idDokter = 1;
    
            return view('AdminDashboard', ['janji' => $janji, 'idjanji' => $idjanji, 'dokter' => $dokter, 'idDokter' => $idDokter]);
        }else{
            return redirect()->back();
        }
    }

    public function approve($id){
        Janji::where('id', $id)->update([
            'status' => '2'
        ]);
        return redirect('/admin');
    }

    public function decline(Request $request){
        Janji::where('id', $request->id)->update([
            'status' => '0',
            'alasan' => $request->alasan
        ]);
        return redirect('/admin');
    }

    public function profile($id){
        if(Auth::user()->username == 'adminAlia'){
            $user = User::where('id', $id)->first();
            $janji = Janji::where('idPengguna', $id)->get();
            $idjanji = 1;
        
        return view('adminProfile', ['user' => $user, 'janji' => $janji, 'idjanji' => $idjanji]);
        }else{
            return redirect()->back();
        }
    }
}
