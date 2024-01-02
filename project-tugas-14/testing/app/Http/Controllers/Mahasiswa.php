<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index", compact("mahasiswa"));
    }

    public function create()
    {
        return view("mahasiswa.create");
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route("mahasiswa");
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return redirect()->route("mahasiswa");
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route("mahasiswa");
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return back();
    }
}
