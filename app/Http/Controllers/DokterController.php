<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    // {
    //     $dokters = Dokter::all();
    //     return view('dokter', compact('dokters'));
    // }

      {
            return view('dokter.index');
        }
}
