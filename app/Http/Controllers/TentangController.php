<?php

namespace App\Http\Controllers;

use App\jadwal_ibadah;
use App\WartaJemaat;

use Illuminate\Http\Request;

class TentangController extends Controller
{
        public function index()
    {
        $jadwal_ibadah = jadwal_ibadah::latest()->take(3)->get(); 
        $warta_jemaat = WartaJemaat::latest()->take(3)->get(); 

        return view('FE/Tentang.index', compact('jadwal_ibadah','warta_jemaat'));
    }
}
