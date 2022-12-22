<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slimming;
use App\Models\Gerai;
use App\Models\Pascamelahirkan;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view ('admin.index');
    }

    public function slimming()
    {
        $slimming = Slimming::latest()->get(); 
        return view ('admin.slimming')
        ->withSlimming($slimming);
    }

    public function edit_slimming($id)
    {
        $slimming=Slimming::find($id);
        $gerai= Gerai::All();
        return view ('admin.editslimming')
        ->withGerai($gerai)
        ->withSlimming($slimming);
    }

    public function pascalahiran()
    {
        $pascamelahirkan=Pascamelahirkan::latest()->get();
        return view('admin.pascalahiran')
        ->withPascamelahirkan($pascamelahirkan);
    }

    public function edit_pascalahiran($id)
    {
        $pascamelahirkan=Pascamelahirkan::find($id);
        return view('admin.editpascalahiran')
        ->withPascamelahirkan($pascamelahirkan);
    }

    public function update_pascalahiran(Request $request, $id)
    {
        $pascamelahirkan = Pascamelahirkan::find($id)->update($request->all());
        return redirect('/admin/pascalahiran');
    }

    public function hapus_pascalahiran($id)
    {
        $pascamelahirkan = Pascamelahirkan::find($id);
        $pascamelahirkan->delete();
        
        return redirect('/admin/pascalahiran');

    }

    public function update_slimming(Request $request ,$id)
    {
        $slimming = Slimming::find($id)->update($request->all()); 
        return redirect('admin/slimming');
    }

    public function hapus_slimming($id)
    {
        $slimming = Slimming::find($id);
        $slimming->delete();

        return redirect('admin/slimming');
    }

    public function spahamil()
    {
        echo "spa hamil";
    }
}
