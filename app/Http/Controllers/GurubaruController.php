<?php

namespace App\Http\Controllers;

use App\Models\GuruBaru;
use Illuminate\Http\Request;

class GurubaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtGurubaru = GuruBaru::all();
        return view('admin.Gurubaru.guru-baru',compact('dtGurubaru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Gurubaru.create-guru');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        GuruBaru::create([
            'nama' => $request->nama,
            'matapelajaran' => $request->matapelajaran,
            'biaya' => $request->biaya,
            'alamat' => $request->alamat,
            'kelasajar' => $request->kelasajar,
            'tgllhr' => $request->tgllhr
        ]);

        return redirect('guru-baru');
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
