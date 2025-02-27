<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact.dashboard', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_tlp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('admin.contact')->with('success', 'Contact created successfully.');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_tlp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
        ]);

        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect()->route('admin.contact')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('admin.contact')->with('success', 'Contact deleted successfully.');
    }
}
