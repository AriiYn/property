<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    // Display a listing of the promotions
    public function promo()
    {
        $promotions = Promo::all();
        return view('admin.promo.dashboard', compact('promotions'));
    }

    // Show the form for creating a new promo
    public function create()
    {
        return view('admin.promo.create');
    }

    // Store a newly created promo in storage
    public function store(Request $request)
    {
        $request->validate([
            'banner' => 'required|image',
        ]);

       // Handle file upload
       $banner = $request->file('banner')->store('images', 'public');

       Promo::create([
           'banner' => $banner,
       ]);

        return redirect()->route('admin.promo')->with('success', 'Banner uploaded successfully.');
    }

    // Show the form for editing the specified promo
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        return view('admin.promo.edit', compact('promo'));
    }

    // Update the specified question in storage
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'banner' => 'nullable|image',
        ]);

        // Cari perumahan berdasarkan ID
        $promo = Promo::findOrFail($id);

        // Periksa apakah ada file baru untuk img_denah
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('images', 'public');
            $promo->banner = $banner;
        }

        // Simpan perubahan ke database
        $promo->save();

        return redirect()->route('admin.promo')->with('success', 'Banner updated successfully.');
    }

    // Remove the specified promo from storage
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('admin.promo')->with('success', 'Promo deleted successfully.');
    }
}
