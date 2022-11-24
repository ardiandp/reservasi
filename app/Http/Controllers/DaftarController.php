<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slimming;
use App\Models\Gerai;

class DaftarController extends Controller
{
    public function index()
    {
        return view ('daftar.index');
    }

    public function slimming()
    {
        $gerai= Gerai::All();
        return view ('daftar.slimming',compact('gerai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat'=> 'required',
            'berat_badan'=> 'required',
            'lokasi_perawatan'=> 'required',
            'gerai'=> 'required',
            'riwayat_penyakit'=> 'required',
            'keterangan_lain'=> 'required',
        ]);
      
        Slimming::create($request->all());
       
        return redirect('daftar')
                        ->with('success','Data created successfully.');

    }

    public function pascalahiran()
    {
    return view ('daftar.pascalahiran');
    }

    public function spahamil()
    {
      
        return view ('daftar.spahamil');
    }
    
}


