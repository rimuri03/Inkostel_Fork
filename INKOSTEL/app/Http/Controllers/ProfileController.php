<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile()
    {
        $profileData = Profile::first();

        return view('profile', ['profileData' => $profileData]);
    }
    public function update(Request $request)
    {
        // Validasi data input hanya untuk username dan email
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
        ]);

        // Ambil data dari formulir
        $username = $request->input('username');
        $email = $request->input('email');

        // Update data profil di database
        Profile::update([
            'username' => $username,
            'email' => $email,
            'nama_panjang' => $nama_panjang,
            'nomor_telpon' => $nomor_telpon,
            // Tambahkan kolom-kolom lain yang perlu diupdate
        ]);

        // Redirect atau kirim respons sesuai kebutuhan Anda
        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui');
    }
}
