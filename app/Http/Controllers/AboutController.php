<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AboutController extends Controller
{
    public function about()
    {
        $contacts = Contact::all();
        return view('user.about.dashboard', compact('contacts'));
    }
}
