<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\jadwal;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function indexTambahDokter(){
        return view('addDokter');
    }

    public function tambahDokter(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'hari' => 'required|string',
            'waktuAwal' => 'required|date_format:H:i',
            'waktuAkhir' => 'required|date_format:H:i|after:waktuAwal',
        ]);

        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        Dokter::create([
            'namaDokter' => $request->nama,
            'foto' => $imageName,
            'spesialis' => $request->spesialis,
            'hari' => $request->hari,
            'waktuAwal' => $request->waktuAwal,
            'waktuAkhir' => $request->waktuAkhir,
        ]);

        $dokter = Dokter::where('namaDokter' ,$request->nama)->first();

        jadwal::create([
            'idDokter' => $dokter->id,
            'hari' => $request->hari,
            'waktuAwal' => $request->waktuAwal,
            'waktuAkhir' => $request->waktuAkhir,
        ]);
        
        return redirect('/admin');
    }

    public function indexUpdateDokter($id){
        $dokter = Dokter::where('id', $id)->first();
        
        return view('editDokter', ['dokter' => $dokter]);
    }

    public function updateDokter(Request $request){
        Dokter::where('id', $request->id)->update([
            'namaDokter' => $request->nama,
            'spesialis' => $request->spesialis,
            'hari' => $request->hari,
            'waktuAwal' => $request->waktuAwal,
            'waktuAkhir' => $request->waktuAkhir,
        ]);
        
        return redirect('/admin');
    }

    public function deleteDokter($id){
        Dokter::where('id', $id)->delete();
        
        return redirect('/admin');
    }
}
