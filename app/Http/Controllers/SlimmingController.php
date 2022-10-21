<?php

namespace App\Http\Controllers;

use App\Models\Slimming;
use Illuminate\Http\Request;

class SlimmingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slimming = Slimming::latest()->paginate(5);

        return view('slimming.index',compact('slimming'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('slimming.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);
      
        Slimming::create($request->all());
       
        return redirect()->route('slimming.index')
                        ->with('success','Data created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slimming $slimming)
    {
        return view ('slimming.show',compact('slimming'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slimming $slimming)
    {
        return view ('slimming.edit',compact('slimming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slimming $slimming)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);
      
        $slimming->update($request->all());
      
        return redirect()->route('slimming.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slimming $slimming)
    {
        $slimming->delete();

        return redirect()->route('slimming.index')
        ->with('success','Data Berhasil Di hapus');
    }
}
