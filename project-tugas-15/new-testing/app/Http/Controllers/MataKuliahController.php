<?php

namespace App\Http\Controllers;

use App\Models\mataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = mataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mata_kuliah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nama_dosen' => 'required',
            'jumlah_sks' => 'required',
        ], [
            'nama_mata_kuliah.required' => 'Nama Mata Kuliah tidak boleh kosong!',
            'kelas.required' => 'Kelas tidak boleh kosong!',
            'jurusan.required' => 'Jurusan tidak boleh kosong!',
            'nama_dosen.required' => 'Dosen tidak boleh kosong!',
            'jumlah_sks.required' => 'Jumlah SKS tidak boleh kosong!',
        ]);

        mataKuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(mataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mataKuliah $mataKuliah, $id)
    {
        $mataKuliah = mataKuliah::find($id);
        return view('matakuliah.edit', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mataKuliah $mataKuliah, $id)
    {
        $mataKuliah = mataKuliah::find($id);
        $mataKuliah->update($request->all());
        return redirect()->route('matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mataKuliah $mataKuliah, $id)
    {
        $mataKuliah = mataKuliah::find($id);
        $mataKuliah->delete();
        return redirect()->route('matakuliah.index');
    }
}
