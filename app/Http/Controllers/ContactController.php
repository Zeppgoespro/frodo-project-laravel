<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required',
            'email'     => ['required', 'email'],
            'message'   => 'required'
        ]);

        # Send email

        Mail::to('zeppgoesblack@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        return ['success' => true];
    }
}