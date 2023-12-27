<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function profile()
    {
        $profileData = Profile::first();
        return view('profile', compact('profileData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'nama_panjang' => 'required|string|max:255',
            'nomor_telpon' => 'required|string|max:20',
        ]);

        $profileData->save();

        // $profileData = Profile::create($validatedData);

        // return redirect('profile')->back()->with('success', 'Data user berhasil disimpan!');
        return redirect('profile');
    }
}
