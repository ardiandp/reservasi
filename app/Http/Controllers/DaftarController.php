<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view ('daftar.index');
    }

    public function slimming()
    {
    return view ('daftar.slimming');
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


