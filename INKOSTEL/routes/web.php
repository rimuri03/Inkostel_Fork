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



Route::post('/jualkos', function (\Illuminate\Http\Request $request) {

    // Mengelola unggahan file gambar_kos1
    $img1 = $request->file('gambar_kos1');
    $img1Name = $img1->getClientOriginalName();
    $img1->move('img', $img1Name);

    // Mengelola unggahan file gambar_kos2
    if ($request->hasFile('gambar_kos2')) {
        $img2 = $request->file('gambar_kos2');
        $img2Name = $img2->getClientOriginalName();
        $img2->move('img', $img2Name);
    } else {
        $img2Name = null;
    }
    if ($request->hasFile('gambar_kos3')) {
        $img3 = $request->file('gambar_kos3');
        $img3Name = $img3->getClientOriginalName();
        $img3->move('img', $img3Name);
    } else {
        $img3Name = null;
    }
    if ($request->hasFile('gambar_kos4')) {
        $img4 = $request->file('gambar_kos4');
        $img4Name = $img4->getClientOriginalName();
        $img2->move('img', $img4Name);
    } else {
        $img4Name = null;
    }
    if ($request->hasFile('gambar_kos5')) {
        $img5 = $request->file('gambar_kos5');
        $img5Name = $img5->getClientOriginalName();
        $img5->move('img/profile', $img5Name);
    } else {
        $img5Name = null;
    }

    // Mengelola unggahan file gambar_kos3
    // Lakukan hal yang sama untuk gambar_kos3 hingga gambar_kos5

    // Membuat instance Validasi baru dan menyimpan data ke database
    Validasi::create([
        'nama_kos' => $request->input('nama_kos'),
        'harga_kos_perbulan' => $request->input('harga_kos_perbulan'),
        'harga_kos_pertahun' => $request->input('harga_kos_pertahun'),
        'jarak_kos' => $request->input('jarak_kos'),
        'Deskripsi' => request('Deskripsi'),
        'alamat' => request('alamat'),
        'ContactPerson' => request('ContactPerson'),
        'gambar_kos1' => $img1Name,
        'gambar_kos2' => $img2Name,
        'gambar_kos3' => $img3Name,
        'gambar_kos4' => $img4Name,
        'gambar_kos5' => $img5Name,
        // Tambahkan baris serupa untuk gambar_kos3 hingga gambar_kos5
        // Tambahkan baris serupa untuk field lainnya
    ]);

    // Mengalihkan kembali atau ke lokasi yang diinginkan setelah pengiriman berhasil
    return redirect('/jualkos')->with('success', 'Data berhasil disimpan.');
})->name('jualkos');


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
