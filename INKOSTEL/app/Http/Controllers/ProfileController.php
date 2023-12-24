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
}
