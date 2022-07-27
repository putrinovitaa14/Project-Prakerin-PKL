<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
return view('wisata.index', compact('wisata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
        'nama_wisata' => 'required',
        'informasi_wisata' => 'required',
        'lokasi' => 'required',
    
    ]);

        $wisata = new wisata();
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->informasi_wisata = $request->informasi_wisata;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.show', compact('wisata'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.edit', compact('wisata'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'nama_wisata' => 'required',
            'informasi_wisata' => 'required',
            'lokasi' => 'required',
            
        ]);

        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->_wisata;
        $wisata->informasi_wisata = $request->informasi_wisata;
        $wisata->lokasi = $request->lokasi;
        $wisata->save();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
