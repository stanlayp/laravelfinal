<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::latest()->get();
        return view('kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
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
            'lantai'=>'required',
            'nokmr'=>'required',
            'jmlhpng'=>'required'
        ]);

        $kamar = Kamar::create([
            'lantai' => $request->input('lantai'),
            'nokmr' => $request->input('nokmr'),
            'jmlhpng' => $request->input('jmlhpng')
            ]);

            return redirect('/kamar')->with('success','Kamar telah disimpan!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'lantai'=>'required',
            'nokmr'=>'required',
            'jmlhpng'=>'required'
        ]);
        
        $kamar = Kamar::whereId($kamar->id)->update([
            'lantai' => $request->input('lantai'),
            'nokmr' => $request->input('nokmr'),
            'jmlhpng' => $request->input('jmlhpng')
            ]);

            return redirect('/kamar')->with('success','Kamar telah diubah!');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar = Kamar::find($kamar->id);
        $kamar->delete();

        return redirect('/kamar')->with('success','kamar telah dihapus!');

    }
}
