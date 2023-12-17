<?php

use App\Http\Controllers\KosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailKontroler;
use App\Http\Controllers\LoginRegis;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JualController;

use App\Http\Controllers\CariKosController;
//use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
})->name('home');

//Login and Registration
Route::get('/login', [LoginRegis::class, 'login'])->name('login');
Route::post('/login', [LoginRegis::class, 'loginPost'])->name('loginPost');
Route::post('/registration', [LoginRegis::class, 'registrationPost'])->name('registration.post');



// Cari Kost
Route::get('/carikost',[CariKosController::class,'index']);

Route::get('/getKosData', [KosController::class, 'getKosData']);





Route::get('/simpan', function () {
    return view('simpan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/detailKos', function () {
    return view('detailKos');
});

//jual Kos
Route::get('/jualkos', [JualController::class, 'tampilregisjual']);
Route::post('/jualkos', [JualController::class, 'prosesregisjual']);



//LayOut --> Hapus saat versi final

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/navbar', function () {
    return view('partial.navbar');
});

Route::get('/footer', function () {
    return view('partial.footer');
});

Route::get('/val', function () {
    return view('validasi');
});

Route::get('/acc', function () {
    return view('accept');
});