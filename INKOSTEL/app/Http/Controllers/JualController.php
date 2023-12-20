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

    public function prosesregisjual(Request $request)
    {
         // Validate the form data
        $request->validate([
            "nama_kos" => 'required|string|max:255',
            "alamat" => 'required|string|max:255',
            "jarak_kos" => 'required|string',
            "ContactPerson" => 'required|numeric',
            "Fasilitas" => 'required|array',
            "harga_kos" => 'required|numeric',
            "gambar_kos" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "Deskripsi" => 'required|string',
        ]);

        // Store the seller information to the database
        $jual = new jual();
        $jual->name = $request->input('nama_kos'); 
        // $jual->email = $request->input('email');
        $jual->alamat = $request->input('alamat');
        $jual->jarak = $request->input('jarak_kos');
        $jual->nomor_telepon = $request->input('ContactPerson');
        $jual->fasilitas = implode(',', $request->input('Fasilitas'));
        $jual->harga = $request->input('harga_kos');

        // Handle image upload
        $imagePath = $request->file('gambar_kos')->store('jual_image', 'public');
        $jual->image = $imagePath;

        $jual->description = $request->input('Deskripsi');
        $jual->simpan();

        // Redirect to a success page or back to the form with a success message
        //belum terlaksana
        return redirect('/jualkos')->with('sukses', 'Registrasi sukses!');
    }

    // public function submit(Request $request){
        
    // }
}
