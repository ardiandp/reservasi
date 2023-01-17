<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slimming;
use App\Models\Gerai;
use App\Models\Pascamelahirkan;
use App\Models\Spahamil;

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

    public function pascalahiran_simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat'=> 'required',
            'rencana_lahiran'=> 'required',
            'hpl'=> 'required',
            'berat_badan'=> 'required',
            'anak_ke'=> 'required',
            'proses_lahiran'=> 'required',
            'rencana_asi'=> 'required',
            'implan'=> 'required',
            'perawatan'=> 'required',
            'slimming'=> 'required',
            'riwayat_penyakit'=> 'required', 

        ]);
      
        $pascalahiran = new Pascamelahirkan;
        $pascalahiran->nama = $request->nama;
        $pascalahiran->no_hp = $request->no_hp;  
        $pascalahiran->alamat = $request->alamat; 
        $pascalahiran->rencana_lahiran = $request->rencana_lahiran; 
        $pascalahiran->hpl = $request->hpl;  
        $pascalahiran->berat_badan = $request->berat_badan;  
        $pascalahiran->anak_ke = $request->anak_ke;  
        $pascalahiran->proses_lahiran = $request->proses_lahiran;  
        $pascalahiran->rencana_asi = $request->rencana_asi;  
        $pascalahiran->implan = $request->implan;
        $pascalahiran->perawatan = $request->perawatan;
        $pascalahiran->slimming = $request->slimming;
        $pascalahiran->riwayat_penyakit = $request->riwayat_penyakit;
        $pascalahiran->save();
       
        return redirect('daftar')
                        ->with('success','Data created successfully.');
    }

    public function spahamil()
    {
      
        return view ('daftar.spahamil');
    }

    public function spahamil_simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp'=> 'required',
            'beratbadan'=> 'required',
            'usiakehamilan'=> 'required',
            'kehamilan_ke'=> 'required',
            'menggunakan_pen'=> 'required',
            'ada_keluhan'=> 'required',
            'kondisi_plasenta'=> 'required',
            'kram_tubuh'=> 'required',
            'pendarahan'=> 'required',
            'stretchmark'=> 'required',
            'lokasi_perawatan'=> 'required', 
            'gerai'=>'required',

        ]);
      
        $spahamil = new Spahamil;
        $spahamil->nama = $request->nama;
        $spahamil->alamat = $request->alamat;  
        $spahamil->telp = $request->telp; 
        $spahamil->beratbadan = $request->beratbadan; 
        $spahamil->usiakehamilan = $request->usiakehamilan;  
        $spahamil->kehamilan_ke = $request->kehamilan_ke;  
        $spahamil->menggunakan_pen = $request->menggunakan_pen;  
        $spahamil->ada_keluhan = $request->ada_keluhan;  
        $spahamil->kondisi_plasenta = $request->kondisi_plasenta;  
        $spahamil->kram_tubuh = $request->kram_tubuh;
        $spahamil->pendarahan = $request->pendarahan;
        $spahamil->stretchmark = $request->stretchmark;
        $spahamil->lokasi_perawatan = $request->lokasi_perawatan;
        $spahamil->gerai = $request->gerai;
        $spahamil->save();
       
        return redirect('daftar')
                        ->with('success','Data created successfully.');
    }
    
}


