<?php

use App\Http\Controllers\KosController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginRegis;
use App\Http\Controllers\LoginController;
//use App\Http\Controllers\RegisterController;




Route::get('/', function () {
    return view('index');
})->name('home');

//Login and Registration
Route::get('/login', [LoginRegis::class, 'login'])->name('login');
Route::post('/login', [LoginRegis::class, 'loginPost'])->name('loginPost');
Route::post('/registration', [LoginRegis::class, 'registrationPost'])->name('registration.post');



//
Route::get('/carikost', function () {
    return view('carikost');
})->name('carikost');

Route::get('/getKosData', [KosController::class,'getKosData']);

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/detailKos', function () {
    return view('detailKos');
});



