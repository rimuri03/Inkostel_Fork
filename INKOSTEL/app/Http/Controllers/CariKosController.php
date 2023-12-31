<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CariKos;
use App\Helpers\Helpers;

class CariKosController extends Controller
{
    public function index()
    {
        $carikos = CariKos::all();
        return view('carikost', compact(['carikos']));
    }

    public function detailkos($id)
    {
       
        $carikos = CariKos::find($id);

        return view('detailKos', compact('carikos'));
    }
    
    
}
