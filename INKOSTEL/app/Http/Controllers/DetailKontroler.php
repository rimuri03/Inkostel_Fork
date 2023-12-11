<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;

class DetailKontroler extends Controller
{
    
    public function show(Kos $kos)
    {
        return view('detailKos', compact('kos'));
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'NamaKos' => 'required',
    //         'Harga' => 'required',
    //         'alamat' => 'required',
    //         'Jarak' => 'required',
    //         'Deskripsi' => 'required',
    //         'Fasilitas' => 'required',
    //         'ContactPerson' => 'required',
    //         'KamarKosong' => 'required',
    //     ]);

        
    // }
}
