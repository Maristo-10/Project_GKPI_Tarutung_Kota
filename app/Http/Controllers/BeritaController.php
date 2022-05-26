<?php

namespace App\Http\Controllers;

use App\jadwal_ibadah;
use App\WartaJemaat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
        public function index()
    {
        $jadwal_ibadah = jadwal_ibadah::latest()->take(3)->get(); 
        $warta_jemaat = WartaJemaat::latest()->take(3)->get(); 

        return view('FE/BeritaGereja.index', compact('jadwal_ibadah','warta_jemaat'));
    }
    public function show()
    {
        $jadwal_ibadah = jadwal_ibadah::latest()->take(3)->get(); 
        $warta_jemaat = WartaJemaat::latest()->take(10)->get(); 

        return view('Berita.index', compact('jadwal_ibadah','warta_jemaat'));
    }
    public function create()
    {
            return view('Berita.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal'     => ['required'],
            'isi'    => ['required'],
            'lampiran'    => ['required'],

        ]);

        if ($request->lampiran) {
            $data['lampiran'] = $request->lampiran->store('gallery');
        }

        WartaJemaat::create($data);

        return redirect()->route('Berita.index')->with('success','Berita berhasil ditambahkan');
    }
    public function edit($id)
    {
        $warta_jemaat = DB::table('warta_jemaat')
        ->where('id', $id)
        ->get();
        return view('Berita.edit', ['warta_jemaat'=>$warta_jemaat]);
    }
    public function update(Request $request)
    {
        $old = WartaJemaat::find($request->id);
        $oldid = $old['lampiran'];

        $pdfFiles = $request->file('lampiran')->store('public/gallery');
        Storage::delete($oldid);


        DB::table('warta_jemaat')->where('id', $request->id)->update([
            'tanggal' => $request->tanggal,
            'isi' => $request->isi,
            'lampiran' => $pdfFiles,
        ]);

        return redirect()->intended('/Berita')->with('updateBerhasil', 'Berita berhasil diperbarui');

    }
    // public function update(Request $request, WartaJemaat $beritum)
    // {
    //     $data = $request->validate([
    //         'tanggal'     => ['required'],
    //         'isi'    => ['required'],
    //         'lampiran'    => ['nullable','file'],

    //     ]);

    //     if ($request->lampiran) {
    //         $data['lampiran'] = $request->lampiran->store('gallery');
    //     }

    //     $beritum->update($data);

    //     return back()->with('success','Berita berhasil diperbarui');
    // }

}
