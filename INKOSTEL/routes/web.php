<?php

use App\Http\Controllers\KosController;
use App\Http\Controllers\SimpanController;
use App\Models\Validasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailKontroler;
use App\Http\Controllers\LoginRegis;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CariKosController;
use App\Http\Controllers\ValidationController;


//use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
})->name('home');

// MiddleWare
Route::middleware(['guest'])->group(function () {
});

//Login and Registration
Route::get('/login', [LoginRegis::class, 'login'])->name('login');
Route::post('/login', [LoginRegis::class, 'loginPost'])->name('loginPost');
Route::post('/registration', [LoginRegis::class, 'registrationPost'])->name('registration.post');

//Logout
Route::post('/logout', [LoginRegis::class, 'logout'])->name('logout');

// MiddleWare
Route::middleware(['guest']);

// Cari Kost
Route::get('/carikost', [CariKosController::class, 'index'])->name('carikost');


//Simpan Kost
Route::get('/simpan', [SimpanController::class, 'tampilkanHalamanSimpan'])->name('simpan.halaman');
Route::post('/simpan/{id}', [SimpanController::class, 'simpanKost']);
Route::delete('/simpan/hapus/{id}', [SimpanController::class, 'hapusSimpan'])->name('hapus.simpan');
//akhir simpan kost


//profile
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/update/{id}', [ProfileController::class, 'update']);

// detailkos
Route::get('/detailkos/{id_kos}', [CariKosController::class, 'detailKos'])->name('detailkos');
Route::get('/acc/{id_kos}', [ValidationController::class, 'acceptkos']);


//jual Kos
// Route::get('/jualkos', [JualController::class, 'tampilregisjual']);

// Route::post('/jualkos', [JualController::class, 'store'])->name('jualkos');


Route::get('/jualkos', function () {
    return view('jualkos');
});



Route::post('/jualkos', [ValidationController::class, 'store'])->name('jualkos');




// Route::post('/jualkos', function(){
//     Validasi::create([
//         'nama_kos' => request('nama_kos'),
//         'harga_kos_perbulan' => request('harga_kos_perbulan'),
//         'harga_kos_pertahun' => request('harga_kos_pertahun'),
//         'jarak_kos' => request('jarak_kos'),
//         'gambar_kos1' => request('gambar_kos1'),
//         'gambar_kos2' => request('gambar_kos1'),
//         'gambar_kos3' => request('gambar_kos1'),
//         'gambar_kos4' => request('gambar_kos1'),
//         'gambar_kos5' => request('gambar_kos1'),
//         'alamat' => request('alamat'),
//         'Deskripsi' => request('Deskripsi'),
//         'ContactPerson' => request('ContactPerson'),
//         'Fasilitas' => request('Fasilitas')

//     ]);
//     return redirect('/jualkos');

// })->name('jualkos');


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


// Validasi
Route::get('/val', [ValidationController::class, 'index'])->name('val')->middleware('admin');
Route::get('/updateData/{id_kos}', [ValidationController::class, 'acceptkos'])->middleware('admin');

// Acc
Route::get('/terima/{id_kos}', [ValidationController::class, 'terima'])->name('terima')->middleware('admin');
Route::get('/tolak/{id_kos}', [ValidationController::class, 'tolak'])->name('tolak')->middleware('admin');
