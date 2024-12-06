<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        $nav = 'Daftar Dosen';
        return view('dosen.index', compact('dosens', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah Dosen';
        return view('dosen.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_dosen' => 'required|string|max:3|unique:dosens,kode_dosen',
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|unique:dosens,nip',
            'email' => 'required|email|unique:dosens,email',
            'no_telepon' => 'nullable|string|max:15',
        ]);
        Dosen::create($validated);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $nav = 'Detail Dosen - ' . $dosen->nama_dosen;
        return view('dosen.show', compact('dosen', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id); 
        $nav = 'Edit Dosen - ' . $dosen->nama_dosen; 
        return view('dosen.edit', compact('dosen', 'nav')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_dosen' => 'required|string|max:3|unique:dosens,kode_dosen,' . $id,
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|unique:dosens,nip,' . $id,
            'email' => 'required|email|unique:dosens,email,' . $id,
            'no_telepon' => 'nullable|string|max:15',
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->update($validated);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}
