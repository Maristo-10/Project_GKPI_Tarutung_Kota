<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
 public function profile($nik){
        
        $jemaat = Jemaat::where('nik',$nik)->first();
        //dd($profile);
        
        return view('jemaat.profile', ['jemaat'=>$jemaat]);
    }
    public function editprofile(Request $request, $nik){
        $nik = $request->nik;
        $namafile = 'profile/';
        if ($request->hasFile('profile')){
            $file = $request->file("profile");
            $extension = $file->getClientOriginalExtension();
            $str = rand();
            $result = md5($str);
            $name = time() . "-" . $result . '.' . $extension;
            $request->file('profile')->move('profile/', $name , $request->file('profile')->getClientOriginalName());
            $namafile = $request->file('profile')->getClientOriginalName();
            
        }
        $jemaat = DB::table('jemaat')->where('nik', $nik)->update([
                
            'nik' => $request->nik,
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'status_pernikahan' => $request->status_pernikahan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_baptis' => $request->tanggal_baptis,
            'tanggal_sidih' => $request->tanggal_sidih,
            'sektor_role' => $request->sektor_role,
            'profile' => $namafile
        ]);
        return back()->with('success', 'Profil Sudah Berhasil Diubah');
    }
