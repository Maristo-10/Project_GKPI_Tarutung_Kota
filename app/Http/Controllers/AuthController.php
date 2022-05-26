<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jemaat;
use App\PelayanGereja;
use Illuminate\Contracts\Session\Session;
use StaticVariable;

class AuthController extends Controller
{
    //
    function index()
    {
        return view('Auth.index');
    }

    function logout(){
        session()->forget("Auth");
        return redirect()->route('home.index');
    }

    function login(Request $request)
    {
        $nik = $request->nik;
        $password = $request->password;
        $jemaat = Jemaat::with(['pelayanGereja'])->where("nik", $nik)->first();
        if ($jemaat) {
            // Will do authentication 
            if (password_verify($password, $jemaat->password)) {
                if ($jemaat->pelayanGereja) {
                    if ($jemaat->pelayanGereja->peran === "Pendeta") {
                        StaticVariable::$user = $jemaat;
                        session()->put('Auth', $jemaat);
                        return redirect()->route('pendeta.index');
                    }
                } else {
                    return redirect()->route('home.index');
                }
            } else {
                return redirect()->back()->withErrors(["message" => "Password salah"])->withInput();
            }
        } else {
            return redirect()->back()->withErrors(["message" => "NIK Tidak terdaftar"])->withInput();
        }
    }
}
