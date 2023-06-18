<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Janji;
use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

class JanjiController extends Controller
{
    function indexJanji() {
        $dokter = Dokter::get();

        return view('buatjanji1', ['dokter' => $dokter]);
    }

    function pilihWaktu(Request $request) {
        $dokter = Dokter::where('id', $request->dokter)->first();

        return view('buatjanji2', ['dokter' => $dokter]);
    }

    function buatJanji(Request $request) {
        Janji::create([
            'idPengguna' => Auth::user()->id,
            'namaDokter' => $request->nama,
            'tglJanji' => $request->tglJanji,
            'waktuJanji' => $request->waktuJanji,
            'status' => '1'
        ]);

        return redirect('/home');
    }
}
