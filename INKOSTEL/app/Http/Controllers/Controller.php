<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Kos;

class KosController extends Controller
{
    public function getKosData()
    {
        $kosData = Kos::all(); // Sesuaikan dengan model dan kolom Anda

        return response()->json($kosData);
    }
}
