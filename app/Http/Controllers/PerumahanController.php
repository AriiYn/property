<?php

namespace App\Http\Controllers;

use App\Models\Perumahan;
use App\Models\Blok;
use App\Models\Interior;
use App\Models\Detailunit;
use Illuminate\Http\Request;

class PerumahanController extends Controller
{
    // Show all Perumahan
    public function perumahan()
    {
        $perumahans = Perumahan::with('blok','interior','detailunit')->get();
        return view('admin.rumah.dashboard', compact('perumahans'));
    }

    // Show create form
    public function create()
    {
        $detailunits = Detailunit::all(); // Ambil semua data unit
        $bloks = Blok::all(); // Ambil semua data blok
        $interiors = Interior::all(); // Ambil semua data interior
        return view('admin.rumah.create', compact('bloks', 'detailunits','interiors'));
    }


    // Store a new Perumahan
    public function store(Request $request)
    {
        $request->validate([
            'id_unit' => 'required',
            'id_blok' => 'required',
            'harga_rumah' => 'required|numeric',
            'img_rumah' => 'required|image',
            'img_denah' => 'required|image',
            'id_interior' => 'required',
            'status' => 'required',
        ]);

        // Handle file upload
        $img_rumah = $request->file('img_rumah')->store('images', 'public');
        $img_denah = $request->file('img_denah')->store('images', 'public');

        Perumahan::create([
            'id_unit' => $request->id_unit,
            'id_blok' => $request->id_blok,
            'harga_rumah' => $request->harga_rumah,
            'img_rumah' => $img_rumah,
            'img_denah' => $img_denah,
            'id_interior' => $request->id_interior,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.perumahan')->with('success', 'Perumahan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perumahan = Perumahan::findOrFail($id); // Ambil data perumahan
        $detailunits = Detailunit::all(); // Ambil semua data blok untuk dropdown
        $bloks = Blok::all(); // Ambil semua data blok untuk dropdown
        $interiors = Interior::all(); // Ambil semua data blok untuk dropdown
        return view('admin.rumah.edit', compact('perumahan', 'detailunits', 'bloks','interiors'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'id_unit' => 'required',
            'id_blok' => 'required',
            'harga_rumah' => 'required|numeric',
            'img_rumah' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_denah' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
            'id_interior' => 'required',
        ]);

        // Cari perumahan berdasarkan ID
        $perumahan = Perumahan::findOrFail($id);

        // Update data perumahan
        $perumahan->id_unit = $request->id_unit;
        $perumahan->id_blok = $request->id_blok;
        $perumahan->harga_rumah = $request->harga_rumah;
        $perumahan->status = $request->status;
        $perumahan->id_interior = $request->id_interior;

        // Periksa apakah ada file baru untuk img_rumah
        if ($request->hasFile('img_rumah')) {
            $img_rumah = $request->file('img_rumah')->store('images', 'public');
            $perumahan->img_rumah = $img_rumah;
        }

        // Periksa apakah ada file baru untuk img_denah
        if ($request->hasFile('img_denah')) {
            $img_denah = $request->file('img_denah')->store('images', 'public');
            $perumahan->img_denah = $img_denah;
        }

        // Simpan perubahan ke database
        $perumahan->save();

        return redirect()->route('admin.perumahan')->with('success', 'Data perumahan berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Temukan data perumahan berdasarkan ID
        $perumahan = Perumahan::findOrFail($id); // Ganti $id jika Anda menggunakan kolom lain

        // Hapus data
        $perumahan->delete();

        return redirect()->route('admin.perumahan')->with('success', 'Data perumahan berhasil dihapus.');
    }
}
