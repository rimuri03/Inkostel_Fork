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

    public function updateData($id){
        $profileData = Profile::find($id);
        return view('updateprofile', compact('profile'));
    }
    
    public function update(Request $request, $id)
    {
        $profileData = Profile::find($request->id);

        $profileData->username = $request->username;
        $profileData->email = $request->email;
        $profileData->nama_panjang = $request->nama_panjang;
        $profileData->nomor_telpon = $request->nomor_telpon;
        $profileData->save();

        return redirect('profile');
        
    }
}
