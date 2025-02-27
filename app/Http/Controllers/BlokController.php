<?php

namespace App\Http\Controllers;

use App\Models\Blok;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    // Menampilkan daftar blok
    public function blok()
    {
        $bloks = Blok::all();
        return view('admin.blok.dashboard', compact('bloks'));
    }

    // Menampilkan form untuk membuat blok baru
    public function create()
    {
        return view('admin.blok.create');
    }

    // Menyimpan blok baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'blok' => 'required|string|max:255',
        ]);

        Blok::create($request->all());

        return redirect()->route('admin.blok')->with('success', 'Blok berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit blok
    public function edit($id)
    {
        $blok = Blok::findOrFail($id);
        return view('admin.blok.edit', compact('blok'));
    }

    public function update(Request $request, $id)
    {
        $blok = Blok::findOrFail($id);
        $blok->update($request->all());

        return redirect()->route('admin.blok')->with('success', 'Blok berhasil diperbarui');
    }

    public function destroy($id)
    {
        $blok = Blok::findOrFail($id);
        $blok->delete();

        return redirect()->route('admin.blok')->with('success', 'Blok berhasil dihapus.');
    }

}
