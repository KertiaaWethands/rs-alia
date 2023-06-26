<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('homepage'));

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/register', [UserController::class, 'indexRegister']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'indexLogin']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profil', [UserController::class, 'profile']);
Route::post('/update-profile', [UserController::class, 'updateProfile']);
Route::get('/batal/{id}', [UserController::class, 'batal']);
Route::get('/jadwal', [UserController::class, 'jadwal']);

Route::get('/buatjanji', [JanjiController::class, 'indexJanji'])->middleware('auth');
Route::post('/buatjanji2', [JanjiController::class, 'pilihWaktu']);
Route::post('/buatjanji', [JanjiController::class, 'buatJanji']);

Route::get('/information1', fn () => view('information1'));
Route::get('/information2', fn () => view('information2'));
Route::get('/information3', fn () => view('information3'));

Route::get('/admin', [AdminController::class, 'indexAdmin']);
Route::get('/adminProfile', fn () => view('adminProfile'));
Route::get('/addDokter', [DokterController::class, 'indexTambahDokter']);
Route::post('/admin', [DokterController::class, 'tambahDokter']);
Route::get('/update/{id}', [DokterController::class, 'indexUpdateDokter']);
Route::post('/update', [DokterController::class, 'updateDokter']);
Route::get('/delete/{id}', [DokterController::class, 'deleteDokter']);
Route::get('/approve/{id}', [AdminController::class, 'approve']);
Route::post('/decline', [AdminController::class, 'decline']);
Route::get('/profile/{id}', [AdminController::class, 'profile']);
Route::get('/addJadwal/{id}', [AdminController::class, 'indexJadwal']);
Route::post('/addJadwal', [AdminController::class, 'tambahJadwal']);

Route::get('/layananUnggulan1', fn () => view('/LayananUnggulan/layananUnggulan1'));
Route::get('/layananUnggulan2', fn () => view('/LayananUnggulan/layananUnggulan2'));
Route::get('/layananUnggulan3', fn () => view('/LayananUnggulan/layananUnggulan3'));
Route::get('/layananUnggulan4', fn () => view('/LayananUnggulan/layananUnggulan4'));
Route::get('/layananUnggulan5', fn () => view('/LayananUnggulan/layananUnggulan5'));
Route::get('/layananUnggulan6', fn () => view('/LayananUnggulan/layananUnggulan6'));
Route::get('/layananUnggulan7', fn () => view('/LayananUnggulan/layananUnggulan7'));
Route::get('/layananUnggulan8', fn () => view('/LayananUnggulan/layananUnggulan8'));
Route::get('/layananUnggulan9', fn () => view('/LayananUnggulan/layananUnggulan9'));

Route::get('/layananPenunjang1', fn () => view('/LayananPenunjang/layananPenunjang1'));
Route::get('/layananPenunjang2', fn () => view('/LayananPenunjang/layananPenunjang2'));
Route::get('/layananPenunjang3', fn () => view('/LayananPenunjang/layananPenunjang3'));

Route::get('/paketKesehatan1', fn () => view('/PaketKesehatan/paketKesehatan1'));
Route::get('/paketKesehatan2', fn () => view('/PaketKesehatan/paketKesehatan2'));
Route::get('/paketKesehatan3', fn () => view('/PaketKesehatan/paketKesehatan3'));

Route::get('/artikel', fn () => view('/Artikel/artikel'));
Route::get('/artikel1', fn () => view('/Artikel/artikel1'));
Route::get('/artikel2', fn () => view('/Artikel/artikel2'));
Route::get('/artikel3', fn () => view('/Artikel/artikel3'));
Route::get('/artikel4', fn () => view('/Artikel/artikel4'));
Route::get('/artikel5', fn () => view('/Artikel/artikel5'));
Route::get('/artikel6', fn () => view('/Artikel/artikel6'));
Route::get('/artikel7', fn () => view('/Artikel/artikel7'));
Route::get('/artikel8', fn () => view('/Artikel/artikel8'));


Route::get('/nilaiKami', fn () => view('/tentangkami/nilaiKami'));
Route::get('/tonggakSejarah', fn () => view('/tentangkami/tonggakSejarah'));

Route::get('/lokasi', fn () => view('/lokasi'));


