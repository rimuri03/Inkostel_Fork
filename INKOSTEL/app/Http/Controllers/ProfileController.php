<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Routing\Controller as BaseController;


class ProfileController extends Controller
{
    public function profile()
    {
        $profileData = Profile::first();
        return view('profile', compact(['profileData']));
    }
    
    public function update(Request $request, $id)
    {
        $profileData = Profile::where('id', $id)->first();
        
        $img = $request->file("file");
        $img -> move("img/profile",$img->getClientOriginalName());
        $profileData->username = $request->username;
        $profileData->email = $request->email;
        $profileData->nama_panjang = $request->nama_panjang;
        $profileData->nomor_telpon = $request->nomor_telpon;
        $profileData->foto_profil = $img->getClientOriginalName();
        $profileData->save();

        return redirect('profile')->with('success', 'Data Berhasil Diperbarui');
    }
}
