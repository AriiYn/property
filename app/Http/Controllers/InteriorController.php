<?php

namespace App\Http\Controllers;

use App\Models\Interior;
use Illuminate\Http\Request;

class InteriorController extends Controller
{
    // Display a listing of the interiors
    public function interior()
    {
        $interiors = Interior::all();
        return view('admin.interior.dashboard', compact('interiors'));
    }

    // Show the form for creating a new promo
    public function create()
    {
        return view('admin.interior.create');
    }

    // Store a newly created promo in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'nullable|string',
            'img_interior1' => 'nullable|image',
            'img_interior2' => 'nullable|image',
            'img_interior3' => 'nullable|image',
            'img_interior4' => 'nullable|image',
            'img_interior5' => 'nullable|image',
            'img_interior6' => 'nullable|image',
        ]);

        // Proses upload gambar
        if ($request->hasFile('img_interior1')) {
            $data['img_interior1'] = $request->file('img_interior1')->store('images', 'public');
        }
        if ($request->hasFile('img_interior2')) {
            $data['img_interior2'] = $request->file('img_interior2')->store('images', 'public');
        }
        if ($request->hasFile('img_interior3')) {
            $data['img_interior3'] = $request->file('img_interior3')->store('images', 'public');
        }
        if ($request->hasFile('img_interior3')) {
            $data['img_interior3'] = $request->file('img_interior3')->store('images', 'public');
        }
        if ($request->hasFile('img_interior4')) {
            $data['img_interior4'] = $request->file('img_interior4')->store('images', 'public');
        }
        if ($request->hasFile('img_interior5')) {
            $data['img_interior5'] = $request->file('img_interior5')->store('images', 'public');
        }
        if ($request->hasFile('img_interior2')) {
            $data['img_interior6'] = $request->file('img_interior6')->store('images', 'public');
        }

        // Simpan data ke database
        Interior::create($data);

        return redirect()->route('admin.interior')->with('success', 'Interior created successfully.');
    }

    // Show the form for editing the specified promo
    public function edit($id)
    {
        $interior = Interior::findOrFail($id);
        return view('admin.interior.edit', compact('interior'));
    }

    // Update the specified question in storage
    public function update(Request $request, $id)
    {
        $interior = Interior::findOrFail($id);
        
        $data = $request->validate([
            'type' => 'nullable|string',
            'img_interior1' => 'nullable|image',
            'img_interior2' => 'nullable|image',
            'img_interior3' => 'nullable|image',
            'img_interior4' => 'nullable|image',
            'img_interior5' => 'nullable|image',
            'img_interior6' => 'nullable|image',
        ]);

        // Proses upload gambar jika ada file baru
        if ($request->hasFile('img_interior1')) {
            $data['img_interior1'] = $request->file('img_interior1')->store('images', 'public');
        }
        if ($request->hasFile('img_interior2')) {
            $data['img_interior2'] = $request->file('img_interior2')->store('images', 'public');
        }
        if ($request->hasFile('img_interior3')) {
            $data['img_interior3'] = $request->file('img_interior3')->store('images', 'public');
        }
        if ($request->hasFile('img_interior4')) {
            $data['img_interior4'] = $request->file('img_interior4')->store('images', 'public');
        }
        if ($request->hasFile('img_interior5')) {
            $data['img_interior5'] = $request->file('img_interior5')->store('images', 'public');
        }
        if ($request->hasFile('img_interior6')) {
            $data['img_interior6'] = $request->file('img_interior6')->store('images', 'public');
        }

        // Update data ke database
        $interior->update($data);

        return redirect()->route('admin.interior')->with('success', 'Interior updated successfully.');
    }

    // Remove the specified promo from storage
    public function destroy($id)
    {
        $interior = Interior::findOrFail($id);
        $interior->delete();

        return redirect()->route('admin.interior')->with('success', 'Interior deleted successfully.');
    }
}
