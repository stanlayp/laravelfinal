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
        $asrama = Asrama::create([
            'nama_asrama' => $request->input('nama_asrama'),
            'jenis_asrama' => $request->input('jenis_asrama')
            ]);

            return redirect('/asrama')->with('success','Asrama telah disimpan!');
            
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
        $asrama = Asrama::whereId($asrama->id)->update([
            'nama_asrama' => $request->input('nama_asrama'),
            'jenis_asrama' => $request->input('jenis_asrama')
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
