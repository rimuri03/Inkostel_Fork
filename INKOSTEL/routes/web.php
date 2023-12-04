<?php

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


Route::get('/jualkos', function () {
    return view('jualkos');

Route::get('/detailKos', function () {
    return view('detailKos');

});

Route::get('/getKosData', [KosController::class,'getKosData']);
Route::get('/jualkos', [KosController::class,'jualkos'])->name('jualkos');
Route::post('/simpanjualkos', [KosController::class,'jualkos'])->name('simpanjualkos');



Route::get('/home', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/carikost', function () {
    return view('carikost');
});

