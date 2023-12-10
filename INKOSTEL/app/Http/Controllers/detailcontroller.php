<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;

class detailcontroller extends Controller
{
    public function getKosData()
    {
        $kosData = Kos::all(); // Sesuaikan dengan model dan kolom Anda

        return view('Kos', [
            "NamaKos" => $kosData,
            "Haraga" => $kosData,
            "Jarak" => $kosData,
            "Deskripsi" => $kosData,
            "Fasilitas" => $kosData,
            "KamarKosong" => $kosData,
        ]);
    }
    // public function show($slug)
    // {
    //     return view('kos',[


    //     ]);
    // }
}
