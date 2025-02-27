<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perumahan;
use App\Models\Contact;
use App\Models\Promo;

class UserController extends Controller
{
     // Menampilkan form Dashboard User
     public function user(Request $request)
    {
        // Get the block ID from the request
        $blokId = $request->input('id_blok');

        // Fetch properties based on block ID if provided, otherwise fetch all
        if ($blokId) {
            $perumahan = Perumahan::with('Detailunit')->where('id_blok', $blokId)->get();
        } else {
            $perumahan = Perumahan::with('Detailunit')->get();
        }

        $contacts = Contact::all();
        $promotions = Promo::all();

        // Send data to the view
        return view('user.dashboard', compact('perumahan','contacts','promotions'));
    }
}
