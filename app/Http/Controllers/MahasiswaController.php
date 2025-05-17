<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' =>'required',
            'nim' =>'required|unique:mahasiswas|alpha_num',
            'program_studi' =>'required',
            'angkatan' =>'required|digits:4|integer|min:2000',
        ]);
        
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan.');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama_lengkap' =>'required',
            'nim' =>'required|alpha_num|unique:mahasiswas,nim,' . $mahasiswa->id,
            'program_studi' =>'required',
            'angkatan' =>'required|digits:4|integer|min:2000',
        ]);
            
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui.');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus.');

    }
}
