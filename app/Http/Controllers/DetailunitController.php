<?php

namespace App\Http\Controllers;

use App\Models\Detailunit;
use Illuminate\Http\Request;

class DetailunitController extends Controller
{
    public function detailunit()
    {
        $units = Detailunit::all();
        return view('admin.detailunit.dashboard', compact('units'));
    }

    public function create()
    {
        return view('admin.detailunit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'ruang_tamu' => 'required|string',
            'balkon' => 'required|string',
            'carport' => 'required|string',
            'dapur' => 'required|string',
            'luas_tanah' => 'required|string',
            'luas_bangunan' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Detailunit::create($request->all());
        return redirect()->route('admin.detailunit')->with('success', 'Detail Unit berhasil ditambahkan');
    }

    public function edit($id)
    {
        $unit = Detailunit::findOrFail($id);
        return view('admin.detailunit.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'ruang_tamu' => 'required|string',
            'balkon' => 'required|string',
            'carport' => 'required|string',
            'dapur' => 'required|string',
            'luas_tanah' => 'required|string',
            'luas_bangunan' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $unit = Detailunit::findOrFail($id);
        $unit->update($request->all()); 

        return redirect()->route('admin.detailunit')->with('success', 'Detail Unit berhasil diperbarui');
    }

    public function destroy($id)
    {
        $unit = Detailunit::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.detailunit')->with('success', 'Detail Unit berhasil dihapus');
    }
}

