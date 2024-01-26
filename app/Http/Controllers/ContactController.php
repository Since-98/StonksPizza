<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

public function submit(Request $request)
{
    // Handle form submission (e.g., send email, save to database)

    return redirect()->route('contact.index')->with('success', 'Message sent successfully!');
}
}

