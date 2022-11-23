<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slimming;

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

    public function edit_slimming()
    {
        return view ('admin.editslimming');
    }

    public function pascalahiran()
    {
        echo "pasca lahiran";
    }

    public function spahamil()
    {
        echo "spa hamil";
    }
}
