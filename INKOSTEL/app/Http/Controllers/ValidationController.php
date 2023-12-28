<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validasi;


class ValidationController extends Controller
{
    public function index(){
        $validation = Validasi::all();
        return view("validasi",compact(["validation"]));
    }

    public function acceptkos($id)
    {
        // Menggunakan findOrFail untuk mencari detail kos berdasarkan ID
        $validation = Validasi::find($id);

        return view('accept', compact('validation'));
    }


    public function update(Request $request)
    {
        //
    }
        
}
