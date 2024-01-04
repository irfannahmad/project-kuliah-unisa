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
