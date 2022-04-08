<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::latest()->get();
        return view('absensi.index', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi = Absensi::create([
            'nim' => $request->input('nim'),
            'tanggal' => $request->input('tanggal'),
            'kehadiran' => $request->input('kehadiran')
            ]);

            return redirect('/absensi')->with('success','Absensi telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        return view('absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $absensi = Absensi::whereId($absensi->id)->update([
            'nim' => $request->input('nim'),
            'tanggal' => $request->input('tanggal'),
            'kehadiran' => $request->input('kehadiran')
            ]);

            return redirect('/absensi')->with('success','Absensi telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        $absensi = Absensi::find($absensi->id);
        $absensi->delete();

        return redirect('/absensi')->with('success','Absensi telah dihapus!');

    }
}
