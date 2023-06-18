<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Janji;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAdmin(){
        $user = User::get();
        
        $janji = Janji::join('users', 'janjis.idPengguna', '=', 'users.id')->get();
        $idjanji = 1;

        $dokter = Dokter::get();
        $idDokter = 1;

        return view('AdminDashboard', ['janji' => $janji, 'idjanji' => $idjanji, 'dokter' => $dokter, 'idDokter' => $idDokter]);
    }

    public function approve($id){
        Janji::where('id', $id)->update([
            'status' => '2'
        ]);
        return redirect('/admin');
    }

    public function decline($id){
        Janji::where('id', $id)->update([
            'status' => '0'
        ]);
        return redirect('/admin');
    }

    public function profile($id){
        $user = User::where('id', $id)->first();
        $janji = Janji::where('idPengguna', $id)->get();
        $idjanji = 1;
        
        return view('adminProfile', ['user' => $user, 'janji' => $janji, 'idjanji' => $idjanji]);
    }
}
