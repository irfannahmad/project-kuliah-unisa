<?php

namespace App\Http\Controllers;

use App\Models\mataKuliah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = mataKuliah::all();
        return view('dashboard', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "mata_kuliah" => "required",
                "kelas" => "required",
                "jurusan" => "required",
                "nama_dosen" => "required",
                "jumlah_sks" => "required",
            ],
            [
                "mata_kuliah.required" => "Nama Mata Kuliah tidak boleh kosong!",
                "kelas.required" => "Nama Kelas tidak boleh kosong!",
                "jurusan.required" => "Nama Jurusan tidak boleh kosong!",
                "nama_dosen.required" => "Nama Nama Dosen tidak boleh kosong!",
                "jumlah_sks.required" => "Jumlah SKS tidak boleh kosong!",
            ]
        );

        mataKuliah::create($request->all());
        return redirect()->route('dashboard');
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
    public function edit(mataKuliah $mataKuliah)
    {
        return view('edit', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mataKuliah $mataKuliah, $id)
    {
        $request->validate(
            [
                "mata_kuliah" => "required",
                "kelas" => "required",
                "jurusan" => "required",
                "nama_dosen" => "required",
                "jumlah_sks" => "required",
            ],
            [
                "mata_kuliah.required" => "Nama Mata Kuliah tidak boleh kosong!",
                "kelas.required" => "Nama Kelas tidak boleh kosong!",
                "jurusan.required" => "Nama Jurusan tidak boleh kosong!",
                "nama_dosen.required" => "Nama Nama Dosen tidak boleh kosong!",
                "jumlah_sks.required" => "Jumlah SKS tidak boleh kosong!",
            ]
        );

        $mataKuliah->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mataKuliah $mataKuliah)
    {
        $mataKuliah->delete();
        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
