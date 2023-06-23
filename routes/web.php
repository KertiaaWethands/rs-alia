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
