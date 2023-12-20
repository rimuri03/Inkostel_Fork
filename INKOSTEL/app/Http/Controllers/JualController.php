<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jual;


class JualController extends Controller
{
    public function tampilregisjual()
    {
        return view("jualkos");
    }

    public function store(Request $request)
    {
         // Validate the form data
        $request->validate([
            "nama_kos" => 'required|string|max:255',
            "alamat" => 'required|string|max:255',
            "jarak_kos" => 'required|string',
            "ContactPerson" => 'required|string',
            "Fasilitas" => 'required|array',
            "harga_kos_perbulan" => 'required|string',
            "harga_kos_pertahun" => 'required|string',
            "gambar_kos" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "Deskripsi" => 'required|string',
        ]);

        // Store the seller information to the database
        $jual = new jual();
        $jual->name = $request->input('nama_kos'); 
        $jual->alamat = $request->input('alamat');
        $jual->jarak = $request->input('jarak_kos');
        $jual->nomor_telepon = $request->input('ContactPerson');
        $jual->harga_kos_pertahun = $request->input('harga_kos_pertahun');
        $jual->harga_kos_perbulan = $request->input('harga_kos_perbulan');

        // Handle image upload
        $imagePath = $request->file('gambar_kos')->store('jual_image', 'public');
        $jual->gambar_kos = $imagePath;

        $jual->description = $request->input('Deskripsi');
        $jual->save();

        // Redirect to a success page or back to the form with a success message
        //belum terlaksana
        return redirect('/jualkos')->with('sukses', 'Registrasi sukses!');
    }
}
