<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use App\Models\Absensi;
use App\Models\Kamar;
use App\Models\Mahasiswa;

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
        $asrama = Asrama::get();
        $kamar = Kamar::get();
        $mahasiswa = Mahasiswa::get();

        return view('absensi.create', compact('asrama', 'kamar', 'mahasiswa'));
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
            'tanggal'=>'required',
            'asrama_id'=>'required',
            'kamar_id' => 'required',
            'mahasiswa_id' => 'required',
            'kehadiran'=>'required'
        ]);

        $absensi = Absensi::create([
            'tanggal' => $request->input('tanggal'),
            'asrama_id' => $request->input('asrama_id'),
            'kamar_id' => $request->input('kamar_id'),
            'mahasiswa_id' => $request->input('mahasiswa_id'),
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
        $asrama = Asrama::get();
        $kamar = Kamar::get();
        $mahasiswa = Mahasiswa::get();

        return view('absensi.edit', compact('absensi', 'asrama', 'kamar', 'mahasiswa'));
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
        $request->validate([
            'tanggal'=>'required',
            'asrama_id'=>'required',
            'kamar_id' => 'required',
            'mahasiswa_id' => 'required',
            'kehadiran'=>'required'
        ]);
        
        $absensi = Absensi::whereId($absensi->id)->update([
            'tanggal' => $request->input('tanggal'),
            'asrama_id' => $request->input('asrama_id'),
            'kamar_id' => $request->input('kamar_id'),
            'mahasiswa_id' => $request->input('mahasiswa_id'),
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
