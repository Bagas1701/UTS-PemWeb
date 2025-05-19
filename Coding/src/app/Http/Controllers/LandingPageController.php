<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMurid;

class LandingPageController extends Controller
{
     public function index()
    {
        $murids = PendaftaranMurid::all(); // ambil semua data
        return view('landing.pendaftaran', compact('murids'));
    }
}
