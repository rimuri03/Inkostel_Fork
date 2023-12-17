<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function tampilkanHalamanSimpan()
    {
        // Ambil data dari database
        $dataKos = Simpan::all();

        // Kirimkan data ke view
        return view('simpan', compact('dataKos'));
    }

    public function delete($id)
    {
        // Temukan data Simpan berdasarkan ID
        $simpan = Simpan::find($id);

        // Jika data tidak ditemukan
        if (!$simpan) {
            return redirect()->route('simpan.halaman')->with('error', 'Data tidak ditemukan');
        }

        // Lakukan logika penghapusan atau hapus data
        $simpan->delete();

        // Setelah penghapusan, Anda bisa mengarahkan pengguna ke halaman lain
        return redirect()->route('simpan.halaman')->with('success', 'Data berhasil dihapus');
    }

}
