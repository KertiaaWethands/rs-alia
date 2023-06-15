<?php

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/buatjanji', function(){
    return view('buatjanji');
});

Route::get('/information1', fn () => view('information1'));
Route::get('/information2', fn () => view('information2'));
Route::get('/information3', fn () => view('information3'));
