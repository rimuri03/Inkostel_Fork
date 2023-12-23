<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\profile;
use function laravel\prompts\info;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $profil = Profile::all();
        return view('profile', compact(["profil"]));
    }
    public function update(Request $request){
        try{
            $request->validate([
                'username' => 'required',
                'email' => 'required',
            ]);
            $profil = Profile::where('username', $request->input('username'))->orWhere('email', $request->input('email'))->firstOrFail();
            $profil -> update([
                'nama_lengkap' => $request -> input('nama_lengkap'),
                'nomor_telepon' => $request -> input('nomor_telpon'),
                'foto_profil' => $request -> input('foto_profil'),
            ]);
            return redirect('/profil')->with('success', 'Data sudah berhasil diupdate');
        }catch(\Exception $e){
            return back()->with('error', 'Gagal update data: '. $errorMessage =$e->getmessage());
        }
    }
}