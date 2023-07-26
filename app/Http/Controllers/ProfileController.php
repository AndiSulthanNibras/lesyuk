<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Profile = new Profile();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        $profile = new Profile();
        $profile->user_id = auth()->user()->id;
        $profile->nama = $request->nama;
        $profile->alamat = $request->alamat;
        $profile->email = $request->email;
        $profile->no_hp = $request->no_hp; 

        $profile->save();
        return redirect()->route('profile')->with('success', 'Profil berhasil dibuat.');
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        
        $profile = Profile::findOrFail($id);
        
        if ($profile->user_id != auth()->user()->id) {
            return redirect()->route('profile')->with('error', 'Akses ditolak.');
        }

        $profile->nama = $request->nama;
        $profile->alamat = $request->alamat;
        $profile->email = $request->email;
        $profile->no_hp = $request->no_hp;

        User::where('user_id', $profile->user_id)->update($validatedData);
        $profile->save();
        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);
        if ($profile->user_id != auth()->user()->id) {
            return redirect()->route('profile')->with('error', 'Akses ditolak.');
        }

        $profile->delete();
        return redirect()->route('profile')->with('success', 'Profil berhasil dihapus.');
    }
}