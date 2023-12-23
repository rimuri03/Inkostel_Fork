<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function tampilkanHalamanSimpan()
    {
        // Ambil data dari database
        $dataKos = Simpan::all();

        // Kirimkan data ke view
        return view('simpan', compact('dataKos'));
    }

}
