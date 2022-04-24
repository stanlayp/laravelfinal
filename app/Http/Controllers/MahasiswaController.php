<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
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
            'nim'=>'required',
            'namadpn'=>'required',
            'namablkng'=>'required',
            'nohp'=>'required',
            'jurusan'=>'required'
        ]);
        
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->input('nim'),
            'namadpn' => $request->input('namadpn'),
            'namablkng' => $request->input('namablkng'),
            'nohp' => $request->input('nohp'),
            'jurusan' => $request->input('jurusan')
        ]);

            return redirect('/mahasiswa')->with('success','Mahasiswa telah disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim'=>'required',
            'namadpn'=>'required',
            'namablkng'=>'required',
            'nohp'=>'required',
            'jurusan'=>'required'
        ]);

        $mahasiswa = Mahasiswa::whereId($mahasiswa->id)->update([
            'nim' => $request->input('nim'),
            'namadpn' => $request->input('namadpn'),
            'namablkng' => $request->input('namablkng'),
            'nohp' => $request->input('nohp'),
            'jurusan' => $request->input('jurusan')
            ]);

            return redirect('/mahasiswa')->with('success','Mahasiswa telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($mahasiswa->id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('success','Mahasiswa telah dihapus!');
    }
}
