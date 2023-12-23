<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;


class DetailKontroler extends Controller
{
    public function show()
    {
        $details = Detail::all();
        return view('detailKos', compact('details'));
    }
}
