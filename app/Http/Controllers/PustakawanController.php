<?php

namespace App\Http\Controllers;
use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pustakawan = Pustakawan::orderBy('Nama')->get();
        return view('pages.pustakawan.index', compact('pustakawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pustakawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'Telepon' => 'required',
            'Jabatan' => 'required',
        ]);

        Pustakawan::create([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'Telepon' => $request->Telepon,
            'Jabatan' => $request->Jabatan,
        ]);
        return redirect()->route('pustakawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $pustakawan = Pustakawan::find($id);
        return view('pages.pustakawan.show', compact('pustakawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
         $pustakawan = Pustakawan::findOrFail($id);
        return view('pages.pustakawan.edit', compact('pustakawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'Telepon' => 'required',
            'Jabatan' => 'required',
        ]);

        $pustakawan = Pustakawan::findOrFail($id);
        $pustakawan->update($request->all());
        return redirect()->route('pustakawan.index')->with('success', 'Data pustakawan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pustakawan = Pustakawan::findOrFail($id);
        $pustakawan->delete();
        return redirect()->route('pustakawan.index')->with('success', 'Data pustakawan berhasil dihapus');
    }
}
