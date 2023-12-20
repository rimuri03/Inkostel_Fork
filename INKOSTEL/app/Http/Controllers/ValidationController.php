<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validasi;


class ValidationController extends Controller
{
    public function index(){
        $validation = Validasi::all();
        return view("validasi",compact("[validation"));
    }
}
