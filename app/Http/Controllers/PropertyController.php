<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blok;
use App\Models\Question;
use App\Models\Contact;
use App\Models\Perumahan;

class PropertyController extends Controller
{
    public function property(Request $request)
    {
        // Ambil input pencarian (nama blok) dari request
        $search = $request->input('search');
        
        // Jika ada pencarian, filter data perumahan berdasarkan nama blok
        if ($search) {
            // Cari berdasarkan nama blok di relasi 'blok'
            $perumahan = Perumahan::with('Detailunit')->whereHas('blok', function($query) use ($search) {
                $query->where('blok', 'like', '%' . $search . '%');
            })->where('status', 'enable')->get();
        } else {
            // Jika tidak ada pencarian, tampilkan semua data perumahan dengan status 'enable'
            $perumahan = Perumahan::with('Detailunit')->where('status', 'enable')->get();
        }

        $contacts = Contact::all();

        // Send data to the view
        return view('user.property.dashboard', compact('perumahan','contacts'));
    }

    // Store a newly created question in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
            'text' => 'required',
        ]);

        Question::create($request->all());

        return redirect()->route('user.property')->with('success', 'Question created successfully, tunggu feedback melalui email.');
    }

    public function show($id)
    {
        $perumahans = Perumahan::all();
        $bloks = Blok::all();
        $contacts = Contact::all();

        $property = Perumahan::with('Detailunit','Interior')->findOrFail($id);
        return view('user.property.show', compact('property','perumahans','bloks','contacts'));
    }

}
