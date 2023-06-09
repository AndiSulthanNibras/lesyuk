<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtMurid = Murid::all();
        return view('admin.Murid.murid',compact('dtMurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Murid.tambah-murid');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Murid::create([
            'nama' => $request->nama,
            'namaguru' => $request->namaguru,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'tglaju' => $request->tglaju
        ]);

        return redirect('murids');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
