<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use App\Models\CariKos; 
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function tampilkanHalamanSimpan()
    {
        // Ambil data dari database
        $dataKos = Simpan::paginate(8);

        // Kirimkan data ke view
        return view('simpan', compact('dataKos'));
    }

    public function simpanKost($id, Request $request)
    {
        $user = auth()->user();
    
        // Cek apakah sudah disimpan sebelumnya
        $existingBookmark = Simpan::where('user_id', $user->id)->where('id', $id)->first();
    
        if ($existingBookmark) {
            return response()->json(['success' => false, 'message' => 'Kost sudah disimpan sebelumnya.']);
        }
    
        // Ambil data kos yang akan disimpan
        $carikos = CariKos::find($id);
    
        // Pastikan data kos ditemukan
        if (!$carikos) {
            return response()->json(['success' => false, 'message' => 'Kost tidak ditemukan.']);
        }
    
        // Simpan data ke tabel BookmarkKos
        Simpan::create([
            'user_id' => $user->id,
            'kos_id' => $id,
            'nama_kos' => $carikos->nama_kos,
            'harga_kos_pertahun' => $carikos->harga_kos_pertahun,
            'jarak_kos' => $carikos->jarak_kos,
            'gambar_kos1' => $carikos->gambar_kos1,
            // Tambahkan kolom lain yang diperlukan
        ]);
    
        
    }

    public function hapusSimpan($id)
    {
        // Cari dan hapus data bookmark berdasarkan ID
        $bookmark = Simpan::find($id);
        if ($bookmark) {
            $bookmark->delete();
            return redirect()->route('simpan.halaman')->with('success', 'Data berhasil dihapus.');
        }

        // Jika data tidak ditemukan
        return redirect()->route('simpan.halaman')->with('error', 'Data tidak ditemukan.');
    }
    
}
