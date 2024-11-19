<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function create()
    {
        // Ha be van jelentkezve a felhasználó
        return view('users.contact');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        return redirect()->route('contact.create')->with('success', 'Your message has been sent!');
    }
}

