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
            "NamaKos" => 'required|string|max:255',
            // "email" => 'required|email|unique:sellers|max:255',
            "alamat" => 'required|string|max:255',
            "Jarak" => 'required|string',
            "ContactPerson" => 'required|numeric',
            "Fasilitas" => 'required|array',
            "Harga" => 'required|numeric',
            "KosID" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            "Deskripsi" => 'required|string',
            "KamarKosong" => 'required|string',
        ]);

        // Store the seller information to the database
        $jual = new jual();
        $jual->name = $request->input('NamaKos'); 
        // $jual->email = $request->input('email');
        $jual->alamat = $request->input('alamat');
        $jual->jarak = $request->input('Jarak');
        $jual->nomor_telepon = $request->input('ContactPerson');
        $jual->fasilitas = implode(',', $request->input('Fasilitas'));
        $jual->harga = $request->input('Harga');

        // Handle image upload
        $imagePath = $request->file('KosID')->store('jual_image', 'public');
        $jual->image = $imagePath;

        $jual->description = $request->input('deskripsi');
        $jual->simpan();

        // Redirect to a success page or back to the form with a success message
        //belum terlaksana
        // return redirect('/jual/register')->with('sukses', 'Registrasi sukses!');
    }
}
