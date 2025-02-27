<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Contact;

class KontakController extends Controller
{
    public function kontak()
    {
        $contacts = Contact::all();
        return view('user.kontak.dashboard', compact('contacts'));
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

        return redirect()->route('user.kontak')->with('success', 'Question created successfully.');
    }
}
