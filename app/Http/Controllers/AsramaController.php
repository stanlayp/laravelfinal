<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use Illuminate\Http\Request;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asrama = Asrama::latest()->get();
        return view('asrama.index', compact('asrama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asrama.create');
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
            'nama'=>'required',
            'jenis'=>'required',
        ]);

        $asrama = Asrama::create([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis')
            ]);

            return redirect('/asrama')->with('success','Asrama Berhasil disimpan!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Asrama $asrama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asrama $asrama)
    {
        return view('asrama.edit', compact('asrama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asrama $asrama)
    {
        $request->validate([
            'nama'=>'required',
            'jenis'=>'required',
        ]);
        
        $asrama = Asrama::whereId($asrama->id)->update([
            'nama' => $request->input('nama'),
            'jenis' => $request->input('jenis')
            ]);

            return redirect('/asrama')->with('success','Asrama telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asrama $asrama)
    {
        $asrama = Asrama::find($asrama->id);
        $asrama->delete();

        return redirect('/asrama')->with('success','Asrama telah dihapus!');
    }
}
