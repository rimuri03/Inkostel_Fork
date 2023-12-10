<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\KosController;
//use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('JualKos');
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/carikost', function () {
    return view('carikost');
});

Route::get('/getKosData', [KosController::class,'getKosData']);



Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/detailKos', function () {
    return view('detailKos');
});



